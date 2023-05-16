<?php
namespace application\controller;



class UserController extends Controller {
    public function loginGet(){
        return "login"._EXTENSION_PHP;
    }

    public function loginPost(){
        $result = $this->model->getUser($_POST);
        $this->model->closeConn();

        if(count($result) === 0){
            $errMsg = "입력하신 회원정보가 없습니다.";
            $this->addDynamicProperty("errMsg",$errMsg);
            return "login"._EXTENSION_PHP;
            // 다이나믹 프로퍼티 
        }
        // 세션에 유저 아이디 저장
        $_SESSION[_STR_LOGIN_ID]=$_POST["user_id"];
        return _BASE_REDIRECT."/shop/main";
    }

    // 로그아웃 메소드 
    public function logoutGet(){
        session_unset();    // 세션을 지워줌
        session_destroy(); 
        return _BASE_REDIRECT."/shop/main";
    }




    // 포스트로 보낼 때 아이디가 데이터베이스에 있는 경우 생성 X
    public function registGet(){
        return "regist"._EXTENSION_PHP;
    }

    public function registPost(){
        $http_method = $_SERVER["REQUEST_METHOD"];
        if( $http_method === "POST" ){
            $arrPost = $_POST;
            $arrCheckError =[];
            // 유효성 검사
            // 글자수 체크 
            if(mb_strlen($arrPost["user_id"]) === 0 || mb_strlen($arrPost["user_id"]) > 12){
                $arrCheckError["user_id"] = "ID는 12글자 이하로 입력해 주세요.";
            }
            // !ID 영문 숫자 체크(해보3)

            // if(preg_match('[a-zA-Z0-9]',$arrPost["user_id"]) === 0){
            //     $arrCheckError["user_id"] = "영문과 숫자로 입력해 주세요.";
            // }


            // 패스워드 수 체크 
            if(mb_strlen($arrPost["user_pw"]) < 8 || mb_strlen($arrPost["user_pw"]) > 20 ){
                $arrCheckError["user_pw"] = "PW는 8~20글자로 입력해 주세요.";
            }
            // !패스워드 영문 숫자, 특수문자 체크 
            // if(preg_match('[a-zA-Z0-9*\/+?{}.]',$arrPost["pw"]) === 0){
            //     $arrCheckError["pw"] = "영문,숫자, 특수문자(*,\,/,+,?,{,},.)로 입력해 주세요.";
            // }

            // 비밀번호 확인 체크 
            if($arrPost["user_pw"] !== $arrPost["pwCheck"]){
                $arrCheckError["pwCheck"] = "비밀번호와 비밀번호 확인이 일치하지 않습니다. ";
            }

            if(mb_strlen($arrPost["user_name"]) === 0 || mb_strlen($arrPost["user_name"])>30){
                $arrCheckError["user_name"] ="이름은 30글자 이하로 입력해 주세요.";
            }
            // 유효성 체크 에러일 경우
            if(!empty($arrCheckError)){
                $this->addDynamicProperty('arrError',$arrCheckError);
                return "regist"._EXTENSION_PHP;
            }

            $result = $this->model->getUser($arrPost,false);
            // 유저 유무 체크 
            if(count($result) !== 0){
                $errMsg = "이미 사용중인 아이디 입니다.";
                $this->addDynamicProperty("errMsg",$errMsg);
                return "regist"._EXTENSION_PHP;
                // 다이나믹 프로퍼티 
            }
            // transaction start 
            $this->model->tranBegin();

            // user insert
            if(!$this->model->registUser($arrPost)){
                // 예외 처리 롤백
                $this->model->tranRollback();
                echo "User Regist Error";
                exit();
            }
            // 정상처리 커밋 
            $this->model->tranCommit();
            //  transaction End********************************************************************


            return _BASE_REDIRECT."/user/login";
        }


    }
            //  데이터베이스에 동일한 유저가 있는지 확인 
            // $result = $this->model->takeUserInfo($arrPost["user_id"]);
            //  var_dump($result);
            
            //  1개이상 있는 경우 중복된 아이디가 있습니다. 
            // if($result>=1){
            //         $errMsg = "이미 중복된 아이디가 있습니다.";
            //         $this->addDynamicProperty("errMsg",$errMsg);
            //         return "regist"._EXTENSION_PHP;
            // }
            // if($arrPost["pw"] === $arrPost["pwCheck"]){
            //      유효성 체크 
            //     $this->model->tranBegin();
            //     if($this->model->registUser($arrPost)){
            //         $this->model->tranCommit();
            //     }else{
            //         $errMsg = "비밀번호가 맞지 않습니다.";
            //         $this->addDynamicProperty("errMsg",$errMsg);
            //         $this->model->tranRollback();
            //         return "regist"._EXTENSION_PHP;
            //     }; 
            //     $this->model->conn->commit();
            //     return "main"._EXTENSION_PHP;
            // }
            // 아니면 성공하고 login.php로 이동 
            // }
            // $arr_post = $_POST;
            // $result_cnt = registUser( $arr_post );
            // exit();


        // return "regist"._EXTENSION_PHP;
    // }


    public function detailGet(){
        return _BASE_REDIRECT."/shop/main";
    }
    
//     public function userGet(){
//         return "detail"._EXTENSION_PHP;
//     }
// }
    public function infoGet(){
        $http_method = $_SERVER["REQUEST_METHOD"];
        $arrGet = $_GET;
        $result = $this->model->getUser($_SESSION,false);
        $this->addDynamicProperty("result",$result);
        // var_dump($result);
        return "info"._EXTENSION_PHP;
    }
    public function infoPost(){
        // $http_method = $_SERVER["REQUEST_METHOD"];
        // $arrGet = $_GET;
        // $arrPost = $_POST;
        // var_dump($arrGet);
        // var_dump($arrPost);
    }


    public function modifyGet(){
        return "modify"._EXTENSION_PHP;
    }

    public function modifyPost(){
        // 해당하는 유저의 정보를 다 가져와서 
        $http_method = $_SERVER["REQUEST_METHOD"];
        $arrGet = $_GET;
        $arrPost = $_POST;
    }
}
?>
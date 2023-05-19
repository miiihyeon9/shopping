<?php
namespace application\controller;

use application\lib\Mail;

class UserController extends Controller {

    public function loginGet(){
        return "login"._EXTENSION_PHP;
    }

    public function loginPost(){
        $result = $this->model->getUser($_POST);
        $this->model->closeConn();

        if(count($result) === 0){
            $errMsg = "아이디 또는 비밀번호가 틀렸습니다.";
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
            // !유효성 검사
            // 글자수 체크 
            if(mb_strlen($arrPost["user_id"]) === 0 || mb_strlen($arrPost["user_id"]) > 12){
                $arrCheckError["user_id"] = "ID는 12글자 이하로 입력해 주세요.";
            }
            
            // ID 영문 숫자 체크(해보3)
            $id_pattern = "/^[a-zA-Z0-9]$/";
            $pw_pattern = '/^[0-9a-zA-Z\!\@\#\$\%\^\&\*]{8,20}$/';
            if(preg_match($id_pattern,$arrPost["user_id"]) !== 0){
                $arrCheckError["user_id"] = "영문과 숫자로 입력해 주세요.";
            }

            // 패스워드 영문 숫자, 특수문자 체크 
            if(preg_match($pw_pattern,$arrPost["user_pw"]) === 0){
                $arrCheckError["user_pw"] = "영문,숫자, 특수문자(!,@,#,$,%,^,&,*)만 입력해 주세요.";
            }
            // 패스워드 수 체크 
            if(mb_strlen($arrPost["user_pw"]) < 8 || mb_strlen($arrPost["user_pw"]) > 20 ){
                $arrCheckError["user_pw"] = "PW는 8~20글자로 입력해 주세요.";
            }
            
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
            //! 전화번호 유효성 검사 
            // $number_pattern = "/[^01[0-1]-{1}[0-9]{3,4}[0-9]{4}]/";
            //! *****************************************/
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


            return "login"._EXTENSION_PHP;
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
    
    public function infoGet(){

        $result = $this->model->getUser($_SESSION,false);
        $this->addDynamicProperty("result",$result);

        return "info"._EXTENSION_PHP;
    }
    public function modifyGet(){
        $result = $this->model->getUser($_SESSION,false);
        // $result = $this->model->getUser($arrGet,false);
        $this->addDynamicProperty("result",$result);
        // var_dump($result);
        return "modify"._EXTENSION_PHP;
    }

    public function modifyPost(){        
        $result = $this->model->getUser($_SESSION,false);
        $this->addDynamicProperty("result",$result);
        // 해당하는 유저의 정보를 다 가져와서 
        // POST했을 때 유저의 비밀번호와 비밀번호 확인이 일치하면 
        // UPDATE


        // update
        // $result_cnt = update_board_info_no( $arr_info );
        // $result = $this->model->getUser($_SESSION,false);
        // $this->addDynamicProperty("result",$result);
        // var_dump($result);
        $arrPost = $_POST;

        $pw_pattern = '/^[0-9a-zA-Z\!\@\#\$\%\^\&\*]{8,20}$/';
        // var_dump($arrPost);
        // !패스워드 영문 숫자, 특수문자 체크 
        if(preg_match($pw_pattern,$arrPost["user_pw"]) === 0){
            $arrCheckError["user_pw"] = "영문,숫자, 특수문자(!,@,#,$,%,^,&,*)만 입력해 주세요.";
        }
        if(mb_strlen($arrPost["user_pw"]) < 8 || mb_strlen($arrPost["user_pw"]) > 20 ){
            $arrCheckError["user_pw"] = "PW는 8~20글자로 입력해 주세요.";
        }
        // 지금 비밀번호와 post로 보낸 비밀번호가 똑같은 경우

        if($result[0]["user_pw"] === $arrPost["user_pw"]){
            $arrCheckError["user_pw"] = "현재 비밀번호와 일치합니다.";
        }

        // 비밀번호 확인 체크 
        if($arrPost["user_pw"] !== $arrPost["pwCheck"]){
            $arrCheckError["pwCheck"] = "비밀번호와 비밀번호 확인이 일치하지 않습니다. ";
        }

        // 이름 
        if(mb_strlen($arrPost["user_name"]) === 0 || mb_strlen($arrPost["user_name"])>30){
            $arrCheckError["user_name"] ="이름은 30글자 이하로 입력해 주세요.";
        }


        // 유효성 체크 에러일 경우
        if(!empty($arrCheckError)){
            $this->addDynamicProperty('arrError',$arrCheckError);
            // var_dump($arrCheckError);
            return "modify"._EXTENSION_PHP;
        }

        $this->model->tranBegin();
            // user insert
            if(!$this->model->updateUser($arrPost)){
                // 예외 처리 롤백
                $this->model->tranRollback();
                echo "User Modify Error";
                exit();
            }
            // 정상처리 커밋 
            $this->model->tranCommit();
            //  transaction End*****************************
            session_unset();    // 세션을 지워줌
            session_destroy(); 
            return "login"._EXTENSION_PHP;
    }

    public function deleteGet(){
        $result = $this->model->getUser($_SESSION,false);
        // $result = $this->model->getUser($arrGet,false);
        $this->addDynamicProperty("result",$result);
        // var_dump($result);
        return "delete"._EXTENSION_PHP;
    }
    
    public function deletePost(){
        $arrPost = $_POST;
        // var_dump($arrPost);
        $this->model->tranBegin();
            // user insert
            if(!$this->model->updateUser($arrPost,false)){
                // 예외 처리 롤백
                $this->model->tranRollback();
                echo "User Delete Error";
                exit();
            }
            // 정상처리 커밋 
            $this->model->tranCommit();
        
        session_unset();    // 세션을 지워줌
        session_destroy(); 
        return _BASE_REDIRECT."/shop/main";
        // return "delete"._EXTENSION_PHP;
    }
}
?>
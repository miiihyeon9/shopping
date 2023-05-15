<?php
namespace application\controller;



class UserController extends Controller {
    public function loginGet(){
        return "login"._EXTENSION_PHP;
    }

    public function loginPost(){
        $result = $this->model->getUser($_POST);
        if(count($result) === 0){
            $errMsg = "입력하신 회원정보가 없습니다.";
            $this->addDynamicProperty("errMsg",$errMsg);
            return "login"._EXTENSION_PHP;
            // 다이나믹 프로퍼티 
        }
        // 세션에 유저 아이디 저장
        $_SESSION[_STR_LOGIN_ID]=$_POST["id"];
        return _BASE_REDIRECT."/shop/main";
    }

    // 로그아웃 메소드 
    public function logoutGet(){
        session_unset();    // 세션을 지워줌
        session_destroy();  // 브라우저와 서버의 연결을 끊는거 
        return "detail"._EXTENSION_PHP;
    }


    // 포스트로 보낼 때 아이디가 데이터베이스에 있는 경우 생성 X
    public function registGet(){
        return "regist"._EXTENSION_PHP;
    }

    public function registPost(){
        $http_method = $_SERVER["REQUEST_METHOD"];
        if( $http_method === "POST" )
        {
            
            $arrPost = $_POST;
            
            // 데이터베이스에 동일한 유저가 있는지 확인 
            $result = $this->model->takeUserInfo($arrPost["id"]);
            var_dump($result);
            
            // 1개이상 있는 경우 중복된 아이디가 있습니다. 
            if($result>=1){
                    $errMsg = "이미 중복된 아이디가 있습니다.";
                    $this->addDynamicProperty("errMsg",$errMsg);
                    return "regist"._EXTENSION_PHP;
            }else if($arrPost["pw"] === $arrPost["pwCheck"]){
                $this->model->tranBegin();
                if($this->model->registUser($arrPost)){
                    $this->model->tranCommit();
                }else{
                    $this->model->tranRollback();
                }; 
                // $this->model->conn->commit();
                return "main"._EXTENSION_PHP;
            }
            // 아니면 성공하고 login.php로 이동 
            }
            // $arr_post = $_POST;
            // $result_cnt = registUser( $arr_post );
            // exit();


        // return "regist"._EXTENSION_PHP;
    }


    public function detailGet(){
        return _BASE_REDIRECT."/shop/main";
    }
    
//     public function userGet(){
//         return "detail"._EXTENSION_PHP;
//     }
// }
}
?>
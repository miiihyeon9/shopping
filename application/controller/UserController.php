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
        return _BASE_REDIRECT."/product/list";
    }

    // 로그아웃 메소드 
    public function logoutGet(){
        session_unset();    //! 그냥 destroy하면 되는거 아닌가/?? 왜 unset을 해주고 destroy해주는 거지??
        session_destroy();
        return "login"._EXTENSION_PHP;
    }
}

?>
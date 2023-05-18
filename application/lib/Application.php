<?php
// 클래스 명과 파일 이름 =
namespace application\lib;

// UrlUtil을 사용한다. 
use application\util\UrlUtil;


class Application {
    // 생성자
    // application 을 인스턴스화 하면 construct를 실행 (construct를 작성하지 않아도 php 자동으로 비어있는 construct를 생성함 )
    public function __construct(){

        $arrPath = UrlUtil::getUrlArrPath();   // 접속 url을 배열로 획득
        // $arrPath = ["user","login"]

        // $arrPath가 비어있다면 User, 아니면 $arrPath[0]을 가져와서 앞 글자를 대문자로 변환
        $identityName = empty($arrPath[0]) ? "Shop" : ucfirst($arrPath[0]) ;
        // $identityName = User

        // $arrPath[1]가 비어있다면 login / 아니면 $arrPath[1]   /하고 GET방식으로 정보를 가져오니까 get을 가져와서 앞글자는 대문자로, 뒤에는 소문자로 변환해줌
        $action = (empty($arrPath[1]) ? "main" : $arrPath[1])
        .ucfirst(strtolower($_SERVER["REQUEST_METHOD"])) ;//GET->get ->Get
        // $action = loginGet

        // 컨트롤러명 작성
        // application/controller/파일명.php

        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;
        

        //해당 파일이 존재 여부 체크 => 없을 때 if문
        if(!(file_exists($controllerPath))){
            echo "해당 컨트롤러 파일이 없습니다. ".$controllerPath;
            exit();
        }

        // 해당 컨트롤러 생성
        // application/controller/UserController 
        $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);

        // 인스턴스화
        new $controllerName($identityName,$action);
        // -> usercontroller 의 construct가 실행이 되는데 usercontroller에 없기 때문에 상속받은 contoller의 construct를 실행
        // new application\controller\UserController(User,loginGet);
        

        // application/controller/UserController
        // var_dump($identityName,$action);        
        // exit();    
    }
}

// new application\lib\Application();
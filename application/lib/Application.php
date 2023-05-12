<?php
// 클래스 명과 파일 이름 =
namespace application\lib;

use application\util\UrlUtil;


class Application {

    // 생성자
    public function __construct(){
        $arrPath = UrlUtil::getUrlArrPath();   // 접속 url을 배열로 획득
        $identityName = empty($arrPath[0]) ? "User" : ucfirst($arrPath[0]) ;
        $action = (empty($arrPath[1]) ? "login" : $arrPath[1])
        .ucfirst(strtolower($_SERVER["REQUEST_METHOD"])) ;//GET->get ->Get
        // 컨트롤러명 작성
        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;
        
        //해당 파일이 존재 여부 체크 => 없을 때 if문
        if(!(file_exists($controllerPath))){
            echo "해당 컨트롤러 파일이 없습니다. ".$controllerPath;
            exit();
        }
        
        // 해당 컨트롤러 생성
        $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);

        
        new $controllerName($identityName,$action);
        // var_dump($identityName,$action);        
        // exit();    
    }
}

// new application\lib\Application();


?>
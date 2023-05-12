<?php
namespace application\controller;

use application\util\UrlUtil;
class Controller{
    protected $model;
    private static $modelList=[];// 똑같은 모델이지만 각 메모리를 갖고 있기 때문에 호출할 때 메모리의 사용량을 줄이기 위해(서버부하를 줄이기 위해) static 사용

    // 생성자
    public function __construct($identityName,$action){
        // session start 
        if(!(isset($_SESSION))){
            session_start();
        }

        // Model 호출하고 결과를 리턴 
        $this->model = $this->getModel($identityName);
        //controller 메소드 호출
        $view = $this->$action();

        if(empty($view)){
            echo "해당 Controller에 메소드가 없습니다.".$action;
            exit();
        }
        require_once $this->getView(view);
    }

    protected function getModel($identityName){
        // 배열에 이 키가 세팅 되어 있는지  있으면 true
        if(!in_array($identityName, self::$modelList))
        {
            $modelName = UrlUtil::replaceSlashToBackslash(_PATH_MODEL.$identityName._BASE_FILENAME_MODEL);
            self::$modelList[$identityName] = new $modelName();
        }
        return self::$modelList[$identityName];
    }
    // 파라미터를 확인해서 해당하는 view를 리턴하거나 , redirect
    public function getView($view){
        return _PATH_VIEW.$view;
    }
}



?>
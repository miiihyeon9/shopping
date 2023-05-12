<?php
namespace application\controller;

use application\util\UrlUtil;

use \AllowDynamicProperties;
#[AllowDynamicProperties]
class Controller{
    protected $model;
    private static $modelList=[];// 똑같은 모델이지만 각 메모리를 갖고 있기 때문에 호출할 때 메모리의 사용량을 줄이기 위해(서버부하를 줄이기 위해) static 사용
    private static $arrNeedAuth = ["product/list"];
    // 생성자
    public function __construct($identityName,$action){
        // session start 
        if(!(isset($_SESSION))){
            session_start();
        }
        // 유저 로그인 및 권한 체크 
        $this->chkAuthorization();



        // Model 호출하고 결과를 리턴 
        $this->model = $this->getModel($identityName);
        //controller 메소드 호출
        $view = $this->$action();

        if(empty($view)){
            echo "해당 Controller에 메소드가 없습니다.".$action;
            exit();
        }
        require_once $this->getView($view);
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
    protected function getView($view){
        // view 체크 
        if(strpos( $view,_BASE_REDIRECT) === 0){
            header($view);
            exit();
        }
        return _PATH_VIEW.$view;
    }

    // 동적 속성(Dynamic property)를 셋팅하는 메소드 
    // 
    protected function addDynamicProperty($key,$val){

        //$this->key는 해당 객체에 있는 프로퍼티를
        // $this->$key 는 지금 객체의 에러메세지를 
        $this->$key = $val;
    }

    // 유저 권한 체크 메소드
    protected function chkAuthorization(){
        $urlPath = UrlUtil::getUrl();
        foreach(self::$arrNeedAuth as $authPath){
            if(!isset($_SESSION[_STR_LOGIN_ID]) && strpos($urlPath, $authPath)===0){
                header(_BASE_REDIRECT."/user/login");
                exit;
            }
        }
    }
}



?>
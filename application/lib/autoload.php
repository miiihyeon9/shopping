<?php
//spl_autoload_register() 함수 - 클래스 자동 불러오기
spl_autoload_register( function($path){
        // str_replace(변경할 문자, 어떤거로 변경할지, 무엇을 변경할지)
    $path = str_replace("\\","/",$path);
    // $arr_path = explode("/",$path);

    // 각 디렉토리 분류


    require_once( $path._EXTENSION_PHP );
});
?>
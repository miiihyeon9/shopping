<?php
// config 파일 가져오기 
require_once("application/lib/config.php");    // 해당 파일을 가져오는게 실패하면 에러 뜨고 즉시 중단 됨
require_once("application/lib/autoload.php");   // autoload 파일
// require_once("application/lib/Application.php"); 
new application\lib\Application();              // Application 호출



?>
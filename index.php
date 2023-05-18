<?php
// config 파일 가져오기 
require_once("application/lib/config.php");    // 해당 파일을 가져오는게 실패하면 에러 뜨고 즉시 중단 됨
require_once("application/lib/autoload.php");   // autoload 파일
// require_once("application/lib/Application.php"); 



// 어디에있는 클래스인지 경로 작성
//! 제일 처음 실행
// 인스턴스 : 객체를 사용하겠다. 
new application\lib\Application();              // Application 호출
// localhost/controller명/mo
// ----->  application이라는 클래스를 객체화 한다 
// 객체 !== 클래스 


//  코드는 위에서 아래로, 오른쪽부터 먼저 실행하고 왼쪽 실행 
?>


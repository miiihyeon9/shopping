<?php
define("_ROOT",$_SERVER["DOCUMENT_ROOT"]);

// DB관련
define("_DB_HOST","localhost");
define("_DB_USER","root");
// 비밀번호 블랭크해서 깃
define("_DB_PASSWORD","0809");
define("_DB_NAME","shopping");
define("_DB_CHARSET","utf8mb4");




// 확장자
define("_EXTENSION_PHP",".php");

// CONTROLLER의 PATH
define("_PATH_CONTROLLER","application/controller/");

// 컨트롤러의 베이스네임
define("_BASE_FILENAME_CONTROLLER","Controller");

// MODELL의 PATH
define("_PATH_MODEL","application/model/");

// MODELL 베이스네임
define("_BASE_FILENAME_MODEL","model");

// VIEW의 PATH
define("_PATH_VIEW","application/view/");


define("_BASE_REDIRECT","Location: ");

define("_STR_LOGIN_ID","user_id");


?>
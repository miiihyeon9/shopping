<?php
namespace application\util;

class UrlUtil {

    // $_GET["url"]을 분석해서 리턴
    // get으로 받아온 "url"이 세팅이 되어 있으면 $_GET["url"]  없으면 빈문자
    public static function getUrl(){
        // localhost/user/login에서  user/login을 가져옴 

        return isset($_GET["url"]) ? $_GET["url"] : "" ;
        // $_GET["url"]이 RewriteRule ^(.+)$ index.php?url=$1 [QSA,L] 에서  url=$1 부분 
    } 
    
    // URL을 /로 구분해서 배열을 만들고 리턴

    public static function getUrlArrPath(){
    // UrlUtil클래스의 getUrl();을 가져와서
        $url = UrlUtil::getUrl();
    // 빈문자가 아니라면 $url을 /기준으로 나누어주고 빈 문자면 ""
        return $url !== "" ? explode("/",$url) : "" ;
    }


    // 
    // "/"를 "\\"로 치환해주는 메소드
    public static function replaceSlashToBackslash($str){    
        return str_replace("/","\\",$str);
    }
}

?>
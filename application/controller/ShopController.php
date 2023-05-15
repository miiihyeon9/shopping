<?php
namespace application\controller;



class ShopController extends Controller {
    public function mainGet(){
        return "main"._EXTENSION_PHP;
    }
    public function userGet(){
        return "detail"._EXTENSION_PHP;
    }
    // public function loginPost(){
        
    //     return _BASE_REDIRECT."/product/list";
    // }
}




?>

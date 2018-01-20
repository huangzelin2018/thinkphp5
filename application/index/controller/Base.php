<?php
namespace app\index\controller;

class Base {
    
    public function __construct() {
         // 指定允许其他域名访问
        header("Access-Control-Allow-Origin:*");
    }
}

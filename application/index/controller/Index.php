<?php

namespace app\index\controller;

class Index extends Base{

    public function index() {
        // 指定允许其他域名访问
        header("Access-Control-Allow-Origin:*");
        $userlist = db('user')->limit(10)->select();
        echo json_encode($userlist);
    }

}

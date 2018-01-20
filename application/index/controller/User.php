<?php

namespace app\index\controller;

class User extends Base {

    public function index() {
        $userlist = db('user')->limit(10)->select();
        echo json_encode($userlist);
    }

    public function edit() {
        $id = input('get.id');
        $json = db('user')->where(['id' => $id])->find();
        echo json_encode($json);
    }

    public function add() {
        $user = input('post.');
        echo json_encode($_POST);die;
        db('user')->insert($user);
        echo json_encode('ok');
    }

}

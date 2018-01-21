<?php

namespace app\index\controller;

use think\Db;

class User extends Base {

    public function index() {
        $page=input('get.page',1);
        $userlist = db('user')->limit(5)->page($page)->order('id desc')->select();
        $count=db('user')->count();
        $data['userlist']=$userlist;
        $data['count']=$count;
        echo json_encode($data);
    }

    public function edit() {
        $user = input('post.');
        db('user')->update($user);
        echo json_encode('ok');
    }

    public function add() {
        $user = input('post.');
        db('user')->insert($user);
        echo json_encode('ok');
    }

    public function delete() {
        $id = input('get.id');
        db('user')->where(['id' => $id])->delete();
        echo json_encode('ok');
    }

    public function get() {
        $id = input('get.id');
        $json = db('user')->where(['id' => $id])->find();
        echo json_encode($json);
    }

}

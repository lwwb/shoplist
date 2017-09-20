<?php
namespace app\admin\behavior;

use think\Controller;
use think\Db;
class AutoYz extends Controller
{
    public function run(&$data){
        if(isset($data)){
            $data['password']=\md5($data['password']);
            $re=Db::name('admin')->where('username',$data['username'])->where('password',$data['password'])->select();

            if($re){
                session('aid',$re[0]['id']);
                session('name',$re[0]['name']);
                $this->redirect("http://127.0.0.1/index.php/admin/index/homepage");
            }else{
                $this->error('密码或账号不正确','index/index');
            }
        }else{
            return false;
        }
    }
}
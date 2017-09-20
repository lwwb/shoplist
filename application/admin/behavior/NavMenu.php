<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 14:16
 */

namespace app\admin\behavior;

use think\Request;
class NavMenu
{
    public function run(){
        $now=Request::instance()->path();
        $arr=\getallmenu();
        foreach ($arr as $key => $val){
            if($key===$now){
                $arr[$key]['isac']='1';

            }
        }
        return $arr;
    }
}
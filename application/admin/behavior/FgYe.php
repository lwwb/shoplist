<?php
namespace app\admin\behavior;

use think\Db;
use think\Request;
use think\Controller;
Class FgYe
{
    public function run($re,$page,$oder=''){
        $rs=Db::name($re)->select();
        $Maxshow=(int)8;
        $Maxpages=(int)ceil((int)count($rs)/(int)$Maxshow);
        $maxShowPage=5;
        $rs=$Maxshow*$page;
        $ls=($Maxshow*$page)-$Maxshow;
        if($oder==''){
            $re=Db::name('com')->limit("$ls,$rs")->select();
            $page+=$Maxshow;
            $Maxshow+=$Maxshow;
            $re['Maxpages']=$Maxpages;
            $re['maxShowPage']=$maxShowPage;
            return $re;
        }


}
}
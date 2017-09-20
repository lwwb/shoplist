<?php

namespace app\admin\behavior;

use think\Db;
use think\Request;
use think\Controller;
class AutoRoot extends Controller
{
    public function run(&$id){

        if(!empty($id)){
            $re=Db::query("select wa.url from w_admin as ad join w_admin_role as ar on ad.id = ar.admin_id join w_role as r on ar.role_id = r.id join w_role_action as ra on r.id = ra.role_id join w_action as wa on wa.id = ra.action_id where ad.id=$id;");
            if(isset($re)){
                foreach ($re as $key=>$value){
                    if($value['url']===Request::instance()->path()){
                        return 111;
                    }
                }
                return $this->error('您没有访问这里的权限','index/index');
            }
        }else{
            return $this->error('您没有访问这里的权限','index/index');
        }

        //dump(md5('admin'));
        //dump(Request::instance()->path());
    }
}

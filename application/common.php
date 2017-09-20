<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


function getallmenu(){
    return array(
        'admin/index/homepage'=>array(
            'name'=> '首页',
            'icon' => 'fa-th',
            'isac'=>'0',
            'cl'=>array(
                    
            )
        ),
        'admin/index/comselect'=>array(
            'name'=> '商品',
            'icon' => 'fa-dashboard',
            'isac'=>'0',
            'cl'=>array()
        )
    );
}
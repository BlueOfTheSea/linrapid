<?php

/**
 * service公共类
 */

declare(strict_types=1);

namespace app\admin\service;

use app\admin\model\MenuModel;
use app\BaseController;
use think\facade\View;

class IndexService extends BaseController
{
    public function index()
    {

        $MenuModel=new MenuModel();
        $Menu=$MenuModel->order('sor_t asc')->select()->toArray();
        $Menu_arr=[];
        foreach($Menu as $v)
        {
            if(strstr($v['menu_name'], '@')) {
                $arr=explode('@', $v['menu_name']);
                $v['menu_name']=$arr[0];
                $v['url']=$arr[1];
                array_push($Menu_arr, $v);
            }else{
                array_push($Menu_arr, $v);
            }
        }

        View::assign('Menu', $Menu_arr);

    }
}

<?php

/**
 * 后台用户列表
 */

declare(strict_types=1);

namespace app\admin\service;

use Linphp\WebGenerator\notice\Msg;
use app\admin\model\UserAdminModel;
use think\facade\Request;
use think\facade\View;

class UserAdminService extends BaseService
{
    /**
     * 显示资源列表
     *
     * @author Administrator
     * @return mixed
     */
    public function index()
    {
        if(Request::isPost()) {$where=array_filter(Request::except(['page','limit']));$limit=Request::param('limit');$UserAdminModel=new UserAdminModel();$data=$UserAdminModel->where($where)->order("id desc")->paginate($limit)->toArray();return Msg::JSON(0, 'SUCCESS', $data['data'], $data['total']);
        }else{ return View::fetch();
        }
    }


    /**
     * 保存新建的资源.
     *
     * @author Administrator
     * @return mixed
     */
    public function save()
    {
        if(Request::isPost()) {$UserAdminModel=new UserAdminModel();$data=$UserAdminModel->save(Request::param());if($data) {return Msg::JSON(200, 'SUCCESS');
        }return Msg::JSON(201, 'ERROR');
        }else{return View::fetch();
        }
    }


    /**
     * 显示指定的资源
     *
     * @author Administrator
     * @return mixed
     */
    public function read()
    {
        $UserAdminModel=new UserAdminModel();$data=$UserAdminModel->where('id', Request::param('id'))->find();return Msg::JSON(200,'SUCCESS', $data);
    }


    /**
     * 保存更新的资源
     *
     * @author Administrator
     * @return mixed
     */
    public function update()
    {
        $UserAdminModel=new UserAdminModel();if(Request::isPost()) {$data=$UserAdminModel->where('id', Request::param('id'))->save(Request::except(['id']));if($data) {return Msg::JSON(200,'SUCCESS');
        }return Msg::JSON(201, 'ERROR');
        }else{$info=$UserAdminModel->where('id', Request::param('id'))->find();View::assign('info', $info);return View::fetch();
        }
    }


    /**
     * 删除指定资源
     *
     * @author Administrator
     * @return mixed
     */
    public function delete()
    {
        $UserAdminModel=new UserAdminModel();$data=$UserAdminModel::destroy(Request::param('id'));if($data) {return Msg::JSON(200, 'SUCCESS');
        }return Msg::JSON(201, 'ERROR');
    }
}

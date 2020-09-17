<?php

/**
 * 后台用户列表
 */

declare(strict_types=1);

namespace app\admin\controller;

use app\admin\service\UserAdminService;
use think\annotation\Inject;

class UserAdmin extends Base
{
    /**
     * @Inject()
     * @var      UserAdminService
     */
    public $UserAdminService;


    /**
     * 显示资源列表
     *
     * @author Administrator
     * @return mixed
     */
    public function index()
    {
        return $this->UserAdminService->index();
    }


    /**
     * 保存新建的资源.
     *
     * @author Administrator
     * @return mixed
     */
    public function save()
    {
        return $this->UserAdminService->save();
    }


    /**
     * 显示指定的资源
     *
     * @author Administrator
     * @return mixed
     */
    public function read()
    {
        return $this->UserAdminService->read();
    }


    /**
     * 保存更新的资源
     *
     * @author Administrator
     * @return mixed
     */
    public function update()
    {
        return $this->UserAdminService->update();
    }


    /**
     * 删除指定资源
     *
     * @author Administrator
     * @return mixed
     */
    public function delete()
    {
        return $this->UserAdminService->delete();
    }
}

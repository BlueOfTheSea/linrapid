<?php

/**
 * 菜单表
 */

declare(strict_types=1);

namespace app\admin\controller;

use app\admin\service\MenuService;
use think\annotation\Inject;

class Menu extends Base
{
    /**
     * @Inject()
     * @var      MenuService
     */
    public $MenuService;


    /**
     * 显示资源列表
     *
     * @author Administrator
     * @return mixed
     */
    public function index()
    {
        return $this->MenuService->index();
    }


    /**
     * 保存新建的资源.
     *
     * @author Administrator
     * @return mixed
     */
    public function save()
    {
        return $this->MenuService->save();
    }


    /**
     * 显示指定的资源
     *
     * @author Administrator
     * @return mixed
     */
    public function read()
    {
        return $this->MenuService->read();
    }


    /**
     * 保存更新的资源
     *
     * @author Administrator
     * @return mixed
     */
    public function update()
    {
        return $this->MenuService->update();
    }


    /**
     * 删除指定资源
     *
     * @author Administrator
     * @return mixed
     */
    public function delete()
    {
        return $this->MenuService->delete();
    }
}

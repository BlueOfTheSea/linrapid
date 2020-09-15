<?php

declare(strict_types=1);

namespace app\admin\controller;

use app\admin\service\LoginService;
use think\annotation\Inject;

class Login
{

    /**
     * @Inject()
     * @var loginService
     */
    public $loginService;


    /**
     * 显示资源列表
     * @return mixed
     * @author Administrator
     */
    public function dologin()
    {
        return $this->loginService->dologin();
    }


    /**
     * 保存新建的资源.
     * @return mixed
     * @author Administrator
     */
    public function logout()
    {
        return $this->loginService->logout();
    }


}

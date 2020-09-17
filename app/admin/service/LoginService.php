<?php

declare(strict_types=1);

namespace app\admin\service;

use Linphp\WebGenerator\notice\Msg;
use app\admin\model\LoginModel;
use think\facade\Request;
use think\facade\Log;
use think\facade\Session;
use think\facade\View;

class LoginService extends BaseService
{

    /**
     * 登录
     *
     * @return mixed
     * @author Administrator
     */
    public function dologin()
    {

        if (Request::isPost()) {
            $data = Request::param();

            if (!captcha_check($data['vercode'])) {
                return Msg::JSON(202, 'error');
            }


            $loginModel = new LoginModel();
            $user_info  = $loginModel->where('phone', $data['phone'])->find();
            try {
                if ($user_info) {
                    //判断密码是否存在
                    if ($user_info['password'] == $data['password']) {
                        Session::set('UserAdmin', $user_info);
                        return Msg::JSON(200, 'SUCCESS');
                    }
                }

                return Msg::JSON(201, 'error');
            } catch (\Exception $e) {
                Log::record('异常报错:' . Request::pathinfo() . $e->getMessage());
            }
        } else {
            return View::fetch();
        }
    }

    public function logout()
    {
        Session::delete('UserAdmin');
        return redirect('/admin/login/dologin');
    }
}

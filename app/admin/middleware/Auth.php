<?php
namespace app\admin\middleware;
use think\facade\Session;

class Auth
{
    public function handle($request, \Closure $next)
    {
        if(!Session::get('UserAdmin'))
        {
            return redirect('/admin/login/dologin');
        }

        return $next($request);
    }
}
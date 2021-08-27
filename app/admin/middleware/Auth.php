<?php
namespace app\admin\middleware;
use think\facade\Session;

class Auth
{
    public function handle($request, \Closure $next)
    {
        if(!Session::get('UserAdmin')) {
             die("<script>window.parent.location='/admin/login/dologin'</script>");
        }

        return $next($request);
    }
}

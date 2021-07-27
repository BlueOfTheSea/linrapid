<?php

/**
 * 文件上传
 */

declare(strict_types=1);

namespace app\admin\controller;

use Linphp\WebGenerator\notice\Msg;
class Upload extends Base
{


    /**
     * 显示资源列表
     *
     * @author Administrator
     * @return mixed
     */
    public function index()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        $savename = \think\facade\Filesystem::disk('public')->putFile('topic', $file);
        $data['src']='/storage/'.$savename;
        return Msg::JSON(0, 'SUCCESS', $data);
    }

}

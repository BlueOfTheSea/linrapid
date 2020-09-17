<?php
declare (strict_types=1);

namespace app\admin\controller;

use app\admin\service\IndexService;
use think\facade\View;
use think\annotation\Inject;
class Index extends Base
{
    /**
     * @Inject()
     * @var      IndexService
     */
    public $IndexService;

    public function index()
    {

        $this->IndexService->index();
        return View::fetch();
    }
}

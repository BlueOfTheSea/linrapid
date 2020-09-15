<?php

/**
 * controller公共类
 */

declare(strict_types=1);

namespace app\admin\controller;

use app\admin\middleware\Auth;
use app\BaseController;

class Base extends BaseController
{
    protected $middleware = [Auth::class];
}

<?php

/**
 * 职权表
 */

declare(strict_types=1);

namespace app\admin\controller;

use app\admin\service\PowersService;
use think\annotation\Inject;

class Powers extends Base
{
	/**
	 * @Inject()
	 * @var PowersService
	 */
	public $PowersService;


	/**
	 * 显示资源列表
	 * @author Administrator
	 * @return mixed
	 */
	public function index()
	{
		return $this->PowersService->index();
	}


	/**
	 * 保存新建的资源.
	 * @author Administrator
	 * @return mixed
	 */
	public function save()
	{
		return $this->PowersService->save();
	}


	/**
	 * 显示指定的资源
	 * @author Administrator
	 * @return mixed
	 */
	public function read()
	{
		return $this->PowersService->read();
	}


	/**
	 * 保存更新的资源
	 * @author Administrator
	 * @return mixed
	 */
	public function update()
	{
		return $this->PowersService->update();
	}


	/**
	 * 删除指定资源
	 * @author Administrator
	 * @return mixed
	 */
	public function delete()
	{
		return $this->PowersService->delete();
	}
}

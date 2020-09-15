<?php

/**
 * 职权表
 */

declare(strict_types=1);

namespace app\admin\service;

use Linphp\Generator\notice\Msg;
use app\admin\model\PowersModel;
use think\facade\Request;
use think\facade\View;

class PowersService extends BaseService
{
	/**
	 * 显示资源列表
	 * @author Administrator
	 * @return mixed
	 */
	public function index()
	{
		if(Request::isPost()) {$where=array_filter(Request::except(['page','limit']));$limit=Request::param('limit');$PowersModel=new PowersModel();$data=$PowersModel->where($where)->order("id desc")->paginate($limit)->toArray();return Msg::JSON(0, 'SUCCESS', $data['data'],$data['total']);}else{ return View::fetch();}
	}


	/**
	 * 保存新建的资源.
	 * @author Administrator
	 * @return mixed
	 */
	public function save()
	{
		if(Request::isPost()) {$PowersModel=new PowersModel();$data=$PowersModel->save(Request::param());if($data){return Msg::JSON(200,'SUCCESS');}return Msg::JSON(201,'ERROR');}else{return View::fetch();}
	}


	/**
	 * 显示指定的资源
	 * @author Administrator
	 * @return mixed
	 */
	public function read()
	{
		$PowersModel=new PowersModel();$data=$PowersModel->where('id',Request::param('id'))->find();return Msg::JSON(200,$data,'SUCCESS');
	}


	/**
	 * 保存更新的资源
	 * @author Administrator
	 * @return mixed
	 */
	public function update()
	{
		$PowersModel=new PowersModel();if(Request::isPost()){$data=$PowersModel->where('id',Request::param('id'))->save(Request::except(['id']));if($data){return Msg::JSON(200,'','SUCCESS');}return Msg::JSON(201,'','ERROR');}else{$info=$PowersModel->where('id', Request::param('id'))->find();View::assign('info',$info);return View::fetch();}
	}


	/**
	 * 删除指定资源
	 * @author Administrator
	 * @return mixed
	 */
	public function delete()
	{
		$PowersModel=new PowersModel();$data=$PowersModel::destroy(Request::param('id'));if($data){return Msg::JSON(200,'','SUCCESS');}return Msg::JSON(201,'','ERROR');
	}
}

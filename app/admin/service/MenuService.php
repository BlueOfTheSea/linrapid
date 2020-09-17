<?php

/**
 * 菜单表
 */

declare(strict_types=1);

namespace app\admin\service;

use Linphp\Generator\notice\Msg;
use app\admin\model\MenuModel;
use think\facade\Request;
use think\facade\View;

class MenuService extends BaseService
{
    private $uid;

    /**
     * 显示资源列表
     *
     * @return mixed
     * @author Administrator
     */
    public function index()
    {
        $MenuModel = new MenuModel();
        $data      = $MenuModel->field('menu_name as title,id,uid')->order('sor_t asc')->select()->toArray();
        if (Request::isPost()) {

            $data = [
                'id'       => 0,
                'spread'   => true,
                'title'    => '管理者菜单',
                'uid'      => 0,
                'children' => $this->generateTree($data)
            ];

            return Msg::JSON(0, 'SUCCESS', $data);
        } else {


            $array = $this->getTree($data);
            View::assign('array', $array);
            return View::fetch();
        }
    }

    /**
     * 查询无限极分类
     *
     * @param  $data
     * @return array
     * @author Administrator
     */
    public function generateTree($data)
    {
        $items = array();
        foreach ($data as $v) {
            $v['spread']     = true;
            $items[$v['id']] = $v;
        }
        $tree = array();
        foreach ($items as $k => $item) {
            if (isset($items[$item['uid']])) {
                $items[$item['uid']]['children'][] = &$items[$k];
            } else {
                $tree[] = &$items[$k];
            }
        }
        return $tree;
    }

    /**
     * 保存新建的资源.
     *
     * @return mixed
     * @author Administrator
     */
    public function save()
    {
        if (Request::isPost()) {
            $MenuModel = new MenuModel();
            $data      = $MenuModel->save(Request::param());
            if ($data) {
                return Msg::JSON(200, 'SUCCESS');
            }
            return Msg::JSON(201, 'ERROR');
        } else {
            return View::fetch();
        }
    }


    /**
     * 显示指定的资源
     *
     * @return mixed
     * @author Administrator
     */
    public function read()
    {
        $MenuModel = new MenuModel();
        $data      = $MenuModel->where('id', Request::param('id'))->find();
        return Msg::JSON(200, $data, 'SUCCESS');
    }


    /**
     * 保存更新的资源
     *
     * @return mixed
     * @author Administrator
     */
    public function update()
    {
        $MenuModel = new MenuModel();
        if (Request::isPost()) {
            $data = Request::only(['id', 'title', 'uid']);
            $data['menu_name'] = $data['title'];
            unset($data['title']);

            $data['update_time'] = time();
            $info                = $MenuModel->where('id', Request::param('id'))->save($data);

            if ($info) {
                return Msg::JSON(200, '', 'SUCCESS');
            }
            return Msg::JSON(201, '', 'ERROR');
        } else {

            return View::fetch();
        }
    }

    public function id_tree($id)
    {
        $MenuModel = new MenuModel();
        $Info      = $MenuModel->where('id', $id)->find();
        if ($Info) {
            if ($Info['uid'] == 0) {
                $this->uid = $Info['id'];

            }
            $this->id_tree($Info['uid']);
        }


    }

    /**
     * 删除指定资源
     *
     * @return mixed
     * @author Administrator
     */
    public function delete()
    {
        $MenuModel = new MenuModel();
        $data      = $MenuModel::destroy(Request::param('id'));
        if ($data) {
            return Msg::JSON(200, '', 'SUCCESS');
        }
        return Msg::JSON(201, '', 'ERROR');
    }

    /**
     * 菜单分组应用
     *
     * @param  $array
     * @param  int $pid
     * @param  int $level
     * @return array
     * @author Administrator
     */
    public function getTree($array, $uid = 0, $level = 0)
    {

        //声明静态数组,避免递归调用时,多次声明导致数组覆盖
        static $list = [];
        foreach ($array as $key => $value) {
            //第一次遍历,找到父节点为根节点的节点 也就是pid=0的节点
            if ($value['uid'] == $uid) {
                //父节点为根节点的节点,级别为0，也就是第一级
                $value['level'] = $level;
                //把数组放到list中
                $list[] = $value;
                //把这个节点从数组中移除,减少后续递归消耗
                unset($array[$key]);
                //开始递归,查找父ID为该节点ID的节点,级别则为原级别+1
                $this->getTree($array, $value['id'], $level + 1);

            }
        }
        return $list;
    }
}

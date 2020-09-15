<?php

declare(strict_types=1);

namespace app\model\entity;

use think\Model;

/**
 * @property int $id
 * @property string $menu_name 菜单名称
 * @property int $uid 一级0
 * @property string $update_time
 */
class RapidMenuEntity extends Model
{
	protected $pk = 'id';
	protected $table = 'rapid_menu';
	protected $schema = ['id' => 'int', 'menu_name' => 'varchar', 'uid' => 'int', 'update_time' => 'varchar'];
}

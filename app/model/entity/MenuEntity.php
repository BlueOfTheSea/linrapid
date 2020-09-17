<?php

declare(strict_types=1);

namespace app\model\entity;

use think\Model;

/**
 * @property int $id
 * @property string $menu_name 菜单名称
 * @property int $uid 一级0
 * @property string $update_time
 * @property float $sor_t 排序需要手动在数据库改
 */
class MenuEntity extends Model
{
    protected $pk = 'id';
    protected $table = 'rapid_menu';

    protected $schema = [
    'id' => 'int',
    'menu_name' => 'varchar',
    'uid' => 'int',
    'update_time' => 'varchar',
    'sor_t' => 'float',
    ];
}

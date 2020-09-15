<?php

declare(strict_types=1);

namespace app\model\entity;

use think\Model;

/**
 * @property int $id
 * @property string $powers_name
 * @property string $menu_id
 * @property string $update_time
 */
class RapidPowersEntity extends Model
{
	protected $pk = 'id';
	protected $table = 'rapid_powers';
	protected $schema = ['id' => 'int', 'powers_name' => 'varchar', 'menu_id' => 'varchar', 'update_time' => 'varchar'];
}

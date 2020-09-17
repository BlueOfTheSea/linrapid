<?php

declare(strict_types=1);

namespace app\model\entity;

use think\Model;

/**
 * @property int $id ID
 * @property string $phone 账号
 * @property string $password 密码
 * @property string $nickname 名称
 * @property string $ip 登录的IP地址
 * @property string $update_time 修改时间
 */
class UserAdminEntity extends Model
{
    protected $pk = 'id';
    protected $table = 'rapid_user_admin';

    protected $schema = [
    'id' => 'int',
    'phone' => 'varchar',
    'password' => 'varchar',
    'nickname' => 'varchar',
    'ip' => 'varchar',
    'update_time' => 'varchar',
    ];
}

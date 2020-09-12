<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */
namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property int $id
 * @property string $user_name
 * @property string $password
 * @property string $auth_key
 * @property string $avatar
 * @property string $tel_phone
 * @property string $mobile_phone
 * @property string $email
 * @property int $group_id
 * @property int $status
 * @property string $last_login_ip
 * @property int $last_login_time
 * @property int $last_modify_pwd_time
 * @property int $add_time
 * @property int $update_time
 */
class TblAdmin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'group_id' => 'integer', 'status' => 'integer', 'last_login_time' => 'integer', 'last_modify_pwd_time' => 'integer', 'add_time' => 'integer', 'update_time' => 'integer'];
}

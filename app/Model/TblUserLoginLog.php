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
 * @property int $user_id
 * @property string $login_time
 * @property string $note
 * @property string $login_ip
 * @property int $source
 * @property int $platform
 * @property string $app_version
 * @property string $device_id
 * @property int $ios_type
 * @property int $android_type
 * @property string $system_version
 */
class TblUserLoginLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_user_login_log';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'source' => 'integer', 'platform' => 'integer', 'ios_type' => 'integer', 'android_type' => 'integer'];
}

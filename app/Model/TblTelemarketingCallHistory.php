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
 * @property int $custom_id
 * @property string $custom_name
 * @property int $ext_code
 * @property int $number
 * @property string $user_name
 * @property int $user_id
 * @property string $mobile_phone
 * @property string $call_time
 * @property int $tel_status
 * @property string $create_time
 * @property string $update_time
 */
class TblTelemarketingCallHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_telemarketing_call_history';

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
    protected $casts = ['id' => 'integer', 'custom_id' => 'integer', 'ext_code' => 'integer', 'number' => 'integer', 'user_id' => 'integer', 'tel_status' => 'integer'];
}

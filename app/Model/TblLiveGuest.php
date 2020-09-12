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
 * @property int $guest_id
 * @property string $guest_name
 * @property int $user_id
 * @property int $user_level
 * @property int $credit_rate
 * @property string $mobile_phone
 * @property string $last_note
 * @property string $email
 * @property int $active_time
 * @property int $status
 * @property string $create_time
 * @property string $update_time
 */
class TblLiveGuest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_live_guest';

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
    protected $casts = ['guest_id' => 'integer', 'user_id' => 'integer', 'user_level' => 'integer', 'credit_rate' => 'integer', 'active_time' => 'integer', 'status' => 'integer'];
}

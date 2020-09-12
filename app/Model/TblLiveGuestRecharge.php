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
 * @property int $guest_id
 * @property int $user_id
 * @property int $type
 * @property int $live_coupon_id
 * @property int $money
 * @property string $login_ip
 * @property string $recharge_order_id
 * @property string $recharge_billno
 * @property int $payed_status
 * @property int $guest_status
 * @property int $active_time
 * @property int $status
 * @property string $create_time
 * @property string $update_time
 */
class TblLiveGuestRecharge extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_live_guest_recharge';

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
    protected $casts = ['id' => 'integer', 'guest_id' => 'integer', 'user_id' => 'integer', 'type' => 'integer', 'live_coupon_id' => 'integer', 'money' => 'integer', 'payed_status' => 'integer', 'guest_status' => 'integer', 'active_time' => 'integer', 'status' => 'integer'];
}

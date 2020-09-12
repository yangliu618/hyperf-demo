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
 * @property string $order_no
 * @property string $ticket_id
 * @property int $user_id
 * @property string $user_name
 * @property string $real_name
 * @property int $star_level
 * @property int $vip_level
 * @property int $coupon_id
 * @property int $coupon_type
 * @property float $first_deposit_amount
 * @property float $coupon_amount
 * @property float $flow_requirement
 * @property int $flow_multi
 * @property int $coupon_record_id
 * @property string $coupon_code
 * @property string $bet_id
 * @property int $check_status
 * @property string $expire_time
 * @property string $create_time
 * @property string $update_time
 * @property int $partner_id
 * @property int $pv_id
 * @property int $bonus_type
 * @property string $game_type
 */
class TblTicketCoupon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_coupon';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'star_level' => 'integer', 'vip_level' => 'integer', 'coupon_id' => 'integer', 'coupon_type' => 'integer', 'first_deposit_amount' => 'float', 'coupon_amount' => 'float', 'flow_requirement' => 'float', 'flow_multi' => 'integer', 'coupon_record_id' => 'integer', 'check_status' => 'integer', 'partner_id' => 'integer', 'pv_id' => 'integer', 'bonus_type' => 'integer'];
}

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
 * @property string $username
 * @property int $wallet_id
 * @property int $wallet_record_id
 * @property int $first_money
 * @property int $first_bonus
 * @property int $bonus
 * @property int $first_lock_money
 * @property int $lock_money
 * @property int $bonus_type
 * @property int $coupon_id
 * @property int $coupon_type
 * @property string $game_type
 * @property int $total_flow
 * @property int $remain_flow
 * @property int $is_calculated
 * @property int $coupon_status
 * @property string $ticket_id
 * @property string $order_no
 * @property string $expire_time
 * @property string $create_time
 * @property string $update_time
 */
class MoneyFlowAccount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_flow_accounts';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'wallet_id' => 'integer', 'wallet_record_id' => 'integer', 'first_money' => 'integer', 'first_bonus' => 'integer', 'bonus' => 'integer', 'first_lock_money' => 'integer', 'lock_money' => 'integer', 'bonus_type' => 'integer', 'coupon_id' => 'integer', 'coupon_type' => 'integer', 'total_flow' => 'integer', 'remain_flow' => 'integer', 'is_calculated' => 'integer', 'coupon_status' => 'integer'];
}

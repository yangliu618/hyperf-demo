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
 * @property int $user_id
 * @property int $coupon_config_id
 * @property int $coupon_record_id
 * @property float $withdrawable_money
 * @property float $un_withdrawable_money
 * @property float $bonus
 * @property float $withdrawable_balance
 * @property float $un_withdrawable_balance
 * @property float $bonus_balance
 * @property int $bonus_type
 * @property float $total_flow
 * @property float $need_flow
 * @property string $expires_time
 * @property int $bonus_can_rebate
 * @property int $payment
 * @property int $pay_type
 * @property int $order_status
 * @property int $result
 * @property int $pay_status
 * @property string $ticket_id
 * @property string $pay_id
 * @property string $bill_no
 * @property int $pay_source
 * @property string $remark
 * @property string $add_time
 * @property string $update_time
 */
class TblAccountDepositRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_account_deposit_record';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'coupon_config_id' => 'integer', 'coupon_record_id' => 'integer', 'withdrawable_money' => 'float', 'un_withdrawable_money' => 'float', 'bonus' => 'float', 'withdrawable_balance' => 'float', 'un_withdrawable_balance' => 'float', 'bonus_balance' => 'float', 'bonus_type' => 'integer', 'total_flow' => 'float', 'need_flow' => 'float', 'bonus_can_rebate' => 'integer', 'payment' => 'integer', 'pay_type' => 'integer', 'order_status' => 'integer', 'result' => 'integer', 'pay_status' => 'integer', 'pay_source' => 'integer'];
}

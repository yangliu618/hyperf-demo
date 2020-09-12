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
 * @property string $ticket_id
 * @property string $user_id
 * @property string $user_name
 * @property string $real_name
 * @property string $currency
 * @property float $withdraw_money
 * @property float $handling_fee
 * @property string $pay_bank_card_no
 * @property string $bank_card_no
 * @property string $bank_sn
 * @property string $bank_name
 * @property string $sub_bank_name
 * @property string $check_bank
 * @property int $account_type
 * @property string $bank_province
 * @property string $bank_city
 * @property int $ticket_type
 * @property string $again_check_time
 * @property int $wait_time
 * @property string $payment_time
 * @property int $payment_status
 * @property int $back_check
 * @property string $ip
 * @property int $is_cancel
 * @property int $wait_system_check
 * @property string $approve_by
 * @property string $user_type
 * @property string $before_time
 * @property string $last_system_time
 * @property string $create_time
 * @property string $update_time
 * @property int $priority
 */
class TblTicketWithdraw extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_withdraw';

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
    protected $casts = ['id' => 'integer', 'withdraw_money' => 'float', 'handling_fee' => 'float', 'account_type' => 'integer', 'ticket_type' => 'integer', 'wait_time' => 'integer', 'payment_status' => 'integer', 'back_check' => 'integer', 'is_cancel' => 'integer', 'wait_system_check' => 'integer', 'priority' => 'integer'];
}

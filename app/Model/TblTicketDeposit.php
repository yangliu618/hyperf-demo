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
 * @property string $bill_no
 * @property string $order_no
 * @property int $pay_channel
 * @property string $business
 * @property int $user_id
 * @property string $pay_id
 * @property string $user_name
 * @property string $real_name
 * @property string $currency
 * @property string $company_bank_name
 * @property string $company_account_name
 * @property string $company_bank_account
 * @property string $company_city
 * @property string $company_branch
 * @property float $amount
 * @property string $coupon
 * @property string $deposit_date
 * @property string $customer_deposit_pos
 * @property string $customer_name
 * @property string $customer_account
 * @property int $payment
 * @property int $deposit_type
 * @property string $terminal_domain
 * @property int $from
 * @property string $ip
 * @property string $auto_note
 * @property string $remarks
 * @property int $review_status
 * @property string $review_person
 * @property int $deposit_status
 * @property string $approve_by
 * @property string $user_type
 * @property int $replace_flag
 * @property string $create_time
 * @property string $update_time
 */
class TblTicketDeposit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_deposit';

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
    protected $casts = ['id' => 'integer', 'pay_channel' => 'integer', 'user_id' => 'integer', 'amount' => 'float', 'payment' => 'integer', 'deposit_type' => 'integer', 'from' => 'integer', 'review_status' => 'integer', 'deposit_status' => 'integer', 'replace_flag' => 'integer'];
}

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
 * @property string $pay_id
 * @property string $ticket_id
 * @property string $bill_no
 * @property int $user_id
 * @property string $user_name
 * @property string $phone
 * @property string $email
 * @property string $currency
 * @property int $grade
 * @property int $cust_level
 * @property int $terminal
 * @property string $bank_code
 * @property string $bank_name
 * @property string $account_name
 * @property string $bank_num
 * @property string $bank_province
 * @property string $bank_city
 * @property string $bank_address
 * @property string $depositor
 * @property int $end_point
 * @property string $ipaddress
 * @property float $amount
 * @property string $pay_code
 * @property int $pay_status
 * @property int $type
 * @property string $message
 * @property string $remark
 * @property string $created_by
 * @property string $product_id
 * @property string $channel
 * @property string $merchant_no
 * @property string $sub_trans_code
 * @property string $server_ip
 * @property string $coupon
 * @property string $create_time
 * @property string $update_time
 */
class TblPayLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_pay_log';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'grade' => 'integer', 'cust_level' => 'integer', 'terminal' => 'integer', 'end_point' => 'integer', 'amount' => 'float', 'pay_status' => 'integer', 'type' => 'integer'];
}

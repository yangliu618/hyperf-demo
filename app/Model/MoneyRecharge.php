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
 * @property int $pay_id
 * @property string $status
 * @property string $order_id
 * @property float $amount
 * @property string $create_time
 * @property string $pay_time
 * @property string $username
 * @property int $user_id
 * @property string $ip
 * @property string $bank_sn
 * @property string $bank_code
 * @property string $bank_user_name
 * @property string $log
 * @property int $pv_id
 * @property string $coupon_code
 */
class MoneyRecharge extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_recharge';

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
    protected $casts = ['id' => 'integer', 'pay_id' => 'integer', 'amount' => 'float', 'user_id' => 'integer', 'pv_id' => 'integer'];
}

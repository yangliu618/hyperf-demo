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
 * @property int $purchase_bet_id
 * @property int $bet_id
 * @property int $user_id
 * @property string $ticket_id
 * @property int $order_type
 * @property int $order_detail_type
 * @property int $order_status
 * @property float $withdrawable_change
 * @property float $un_withdrawable_change
 * @property float $bonus_change
 * @property float $withdrawable_balance
 * @property float $un_withdrawable_balance
 * @property float $bonus_balance
 * @property string $remark
 * @property string $add_time
 */
class TblAccountRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_account_record';

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
    protected $casts = ['id' => 'integer', 'purchase_bet_id' => 'integer', 'bet_id' => 'integer', 'user_id' => 'integer', 'order_type' => 'integer', 'order_detail_type' => 'integer', 'order_status' => 'integer', 'withdrawable_change' => 'float', 'un_withdrawable_change' => 'float', 'bonus_change' => 'float', 'withdrawable_balance' => 'float', 'un_withdrawable_balance' => 'float', 'bonus_balance' => 'float'];
}

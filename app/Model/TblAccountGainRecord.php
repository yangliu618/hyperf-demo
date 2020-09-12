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
 * @property int $deposit_id
 * @property int $user_id
 * @property int $purchase_bet_id
 * @property int $bet_id
 * @property float $withdrawable_change
 * @property float $un_withdrawable_change
 * @property float $bonus_change
 * @property float $need_flow_change
 * @property float $bonus_to_withdraw
 * @property int $status
 * @property string $remark
 * @property string $add_time
 * @property string $update_time
 */
class TblAccountGainRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_account_gain_record';

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
    protected $casts = ['id' => 'integer', 'deposit_id' => 'integer', 'user_id' => 'integer', 'purchase_bet_id' => 'integer', 'bet_id' => 'integer', 'withdrawable_change' => 'float', 'un_withdrawable_change' => 'float', 'bonus_change' => 'float', 'need_flow_change' => 'float', 'bonus_to_withdraw' => 'float', 'status' => 'integer'];
}

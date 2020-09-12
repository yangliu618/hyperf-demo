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
 * @property string $query_date
 * @property int $total_reg_user
 * @property int $newadd_reg_user
 * @property int $total_cashin_user
 * @property int $newadd_cashin_user
 * @property int $cashin_user
 * @property int $cashin
 * @property int $total_cashout_user
 * @property int $newadd_cashout_user
 * @property int $cashout_user
 * @property int $cashout
 * @property int $total_bet_user
 * @property int $bet_user
 * @property int $newadd_bet_user
 * @property string $arup
 * @property string $au
 * @property int $wallet_amount
 * @property int $freeze_wallet_amount
 * @property string $wallet_detail
 * @property int $expire_coupon_amount
 * @property int $expire_coupon
 * @property int $coupon_amount
 * @property int $coupon
 * @property int $cancel_coupon_amount
 * @property int $cancel_coupon
 * @property int $quota_repair
 * @property string $add_time
 */
class TblUserDaily extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_user_daily';

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
    protected $casts = ['id' => 'integer', 'total_reg_user' => 'integer', 'newadd_reg_user' => 'integer', 'total_cashin_user' => 'integer', 'newadd_cashin_user' => 'integer', 'cashin_user' => 'integer', 'cashin' => 'integer', 'total_cashout_user' => 'integer', 'newadd_cashout_user' => 'integer', 'cashout_user' => 'integer', 'cashout' => 'integer', 'total_bet_user' => 'integer', 'bet_user' => 'integer', 'newadd_bet_user' => 'integer', 'wallet_amount' => 'integer', 'freeze_wallet_amount' => 'integer', 'expire_coupon_amount' => 'integer', 'expire_coupon' => 'integer', 'coupon_amount' => 'integer', 'coupon' => 'integer', 'cancel_coupon_amount' => 'integer', 'cancel_coupon' => 'integer', 'quota_repair' => 'integer'];
}

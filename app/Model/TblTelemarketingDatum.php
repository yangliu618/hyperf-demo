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
 * @property string $reg_time
 * @property string $last_login_time
 * @property string $first_deposit_time
 * @property float $first_deposit_amount
 * @property float $total_deposit_amount
 * @property string $last_deposit_time
 * @property string $last_bet_time
 * @property int $total_login_num
 * @property float $total_bet_amount
 * @property int $deposit_count
 * @property float $total_withdraw_amount
 * @property float $valid_bet_amount
 * @property float $total_coupon_amount
 * @property float $total_rebate_amount
 * @property float $win_or_lose
 * @property string $admin_note
 * @property string $operator_name
 * @property string $execute_time
 * @property string $expires_time
 * @property string $tel_note
 * @property string $create_time
 */
class TblTelemarketingDatum extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_telemarketing_data';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'first_deposit_amount' => 'float', 'total_deposit_amount' => 'float', 'total_login_num' => 'integer', 'total_bet_amount' => 'float', 'deposit_count' => 'integer', 'total_withdraw_amount' => 'float', 'valid_bet_amount' => 'float', 'total_coupon_amount' => 'float', 'total_rebate_amount' => 'float', 'win_or_lose' => 'float'];
}

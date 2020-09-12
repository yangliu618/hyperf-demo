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
 * @property int $customer_id
 * @property string $customer_name
 * @property int $performance_count
 * @property float $deposit_amount
 * @property float $withdraw_amount
 * @property float $win_or_lose
 * @property float $bet_amount
 * @property int $deposit_count
 * @property int $bet_count
 * @property int $login_num
 * @property float $valid_deposit_amount
 * @property float $valid_withdraw_amount
 * @property float $valid_win_or_lose
 * @property float $valid_bet_amount
 * @property int $valid_deposit_count
 * @property int $valid_bet_count
 * @property int $valid_login_num
 * @property int $reg_num
 * @property int $call_count
 * @property string $create_time
 */
class TblTelemarketingPerformanceDatum extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_telemarketing_performance_data';

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
    protected $casts = ['id' => 'integer', 'customer_id' => 'integer', 'performance_count' => 'integer', 'deposit_amount' => 'float', 'withdraw_amount' => 'float', 'win_or_lose' => 'float', 'bet_amount' => 'float', 'deposit_count' => 'integer', 'bet_count' => 'integer', 'login_num' => 'integer', 'valid_deposit_amount' => 'float', 'valid_withdraw_amount' => 'float', 'valid_win_or_lose' => 'float', 'valid_bet_amount' => 'float', 'valid_deposit_count' => 'integer', 'valid_bet_count' => 'integer', 'valid_login_num' => 'integer', 'reg_num' => 'integer', 'call_count' => 'integer'];
}

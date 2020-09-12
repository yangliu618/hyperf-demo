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
 * @property int $platform_id
 * @property float $total_money
 * @property float $available_money
 * @property float $withdrawable_money
 * @property float $un_withdrawable_money
 * @property float $bonus
 * @property float $total_in
 * @property float $total_out
 * @property float $total_profit
 * @property float $total_rebate
 * @property float $total_bet
 * @property string $add_time
 * @property string $update_time
 */
class TblAccountStat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_account_stats';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'platform_id' => 'integer', 'total_money' => 'float', 'available_money' => 'float', 'withdrawable_money' => 'float', 'un_withdrawable_money' => 'float', 'bonus' => 'float', 'total_in' => 'float', 'total_out' => 'float', 'total_profit' => 'float', 'total_rebate' => 'float', 'total_bet' => 'float'];
}

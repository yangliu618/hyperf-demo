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
 * @property int $bet_id
 * @property int $user_id
 * @property string $username
 * @property int $reserve_id
 * @property int $purchase_bet_id
 * @property int $platform_id
 * @property string $platform
 * @property int $order_state
 * @property int $order_type
 * @property int $danger_type
 * @property int $risk_status
 * @property int $risk_level
 * @property float $stake
 * @property float $single_stake
 * @property int $combo_bet_numers_lines
 * @property int $combinations
 * @property string $combination_name
 * @property string $bet_type_name
 * @property int $number_of_bets
 * @property string $odds
 * @property float $gain
 * @property float $amount
 * @property int $result_type
 * @property float $win_or_lose
 * @property int $is_live
 * @property int $is_show
 * @property string $note
 * @property int $analysis_report
 * @property string $ip
 * @property int $gain_status
 * @property string $gain_note
 * @property int $statistics
 * @property float $valid_amount
 * @property float $rebate_amount
 * @property string $creation_time
 * @property string $settlement_time
 * @property string $create_time
 * @property string $update_time
 */
class BetOrderAll extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bet_order_all';

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
    protected $casts = ['bet_id' => 'integer', 'user_id' => 'integer', 'reserve_id' => 'integer', 'purchase_bet_id' => 'integer', 'platform_id' => 'integer', 'order_state' => 'integer', 'order_type' => 'integer', 'danger_type' => 'integer', 'risk_status' => 'integer', 'risk_level' => 'integer', 'stake' => 'float', 'single_stake' => 'float', 'combo_bet_numers_lines' => 'integer', 'combinations' => 'integer', 'number_of_bets' => 'integer', 'gain' => 'float', 'amount' => 'float', 'result_type' => 'integer', 'win_or_lose' => 'float', 'is_live' => 'integer', 'is_show' => 'integer', 'analysis_report' => 'integer', 'gain_status' => 'integer', 'statistics' => 'integer', 'valid_amount' => 'float', 'rebate_amount' => 'float'];
}

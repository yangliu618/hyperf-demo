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
 * @property int $risk_type
 * @property int $standard_league_id
 * @property int $standard_sport_id
 * @property int $standard_market_id
 * @property int $standard_region_id
 * @property int $standard_is_live
 * @property float $standard_bet_amount
 * @property float $bet_amount
 * @property string $risk_detail
 * @property int $standard_match_day
 * @property float $profit_amount
 * @property float $standard_profit_amount
 * @property float $standard_continuous_profit
 * @property float $standard_winning_rate
 * @property int $standard_single_day_bet
 * @property int $standard_bet_num
 * @property int $standard_interval
 * @property int $standard_bet_interval
 * @property int $standard_period_set_id
 * @property int $standard_period_num
 * @property int $status
 * @property string $remake
 * @property string $sure_time
 * @property string $cancel_time
 * @property string $create_time
 * @property string $update_time
 * @property int $risk_user_config_id
 * @property int $template
 * @property string $bet_ids
 */
class TblRiskUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_user';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'risk_type' => 'integer', 'standard_league_id' => 'integer', 'standard_sport_id' => 'integer', 'standard_market_id' => 'integer', 'standard_region_id' => 'integer', 'standard_is_live' => 'integer', 'standard_bet_amount' => 'float', 'bet_amount' => 'float', 'standard_match_day' => 'integer', 'profit_amount' => 'float', 'standard_profit_amount' => 'float', 'standard_continuous_profit' => 'float', 'standard_winning_rate' => 'float', 'standard_single_day_bet' => 'integer', 'standard_bet_num' => 'integer', 'standard_interval' => 'integer', 'standard_bet_interval' => 'integer', 'standard_period_set_id' => 'integer', 'standard_period_num' => 'integer', 'status' => 'integer', 'risk_user_config_id' => 'integer', 'template' => 'integer'];
}

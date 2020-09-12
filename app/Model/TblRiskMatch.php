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
 * @property int $standard_is_live
 * @property int $standard_sport_id
 * @property int $standard_proportion
 * @property int $standard_match_id
 * @property string $match_time
 * @property string $standard_league_name
 * @property string $standard_market_id
 * @property int $standard_interval
 * @property int $standard_bet_num
 * @property float $standard_bet_amount
 * @property string $standard_period_set_id
 * @property string $standard_period_num
 * @property string $match_detail
 * @property string $your_bet
 * @property float $total_amount
 * @property float $risk_amount
 * @property string $active_condition
 * @property int $risk_type
 * @property int $status
 * @property string $risk_time
 * @property string $cancel_time
 * @property string $create_time
 * @property string $update_time
 * @property int $risk_match_config_id
 * @property int $template
 * @property float $original_odds
 * @property float $current_odds
 */
class TblRiskMatch extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_match';

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
    protected $casts = ['id' => 'integer', 'standard_is_live' => 'integer', 'standard_sport_id' => 'integer', 'standard_proportion' => 'integer', 'standard_match_id' => 'integer', 'standard_interval' => 'integer', 'standard_bet_num' => 'integer', 'standard_bet_amount' => 'float', 'total_amount' => 'float', 'risk_amount' => 'float', 'risk_type' => 'integer', 'status' => 'integer', 'risk_match_config_id' => 'integer', 'template' => 'integer', 'original_odds' => 'float', 'current_odds' => 'float'];
}

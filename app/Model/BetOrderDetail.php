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
 * @property int $bet_id
 * @property int $sport_id
 * @property string $sport_name
 * @property int $league_id
 * @property string $league_name
 * @property int $region_id
 * @property string $region_name
 * @property string $home_team
 * @property string $away_team
 * @property string $result
 * @property int $home_score
 * @property int $away_score
 * @property string $your_bet
 * @property string $user_odds_style
 * @property float $odds_in_user_style
 * @property float $point
 * @property int $line_type_id
 * @property string $line_type_name
 * @property int $is_live
 * @property int $period_num
 * @property int $period_set_id
 * @property string $period_name
 * @property int $match_id
 * @property int $single_result_id
 * @property string $single_result_name
 * @property int $event_part_id
 * @property int $option_num
 * @property string $game_start_time
 * @property int $match_state
 * @property int $translate
 * @property string $create_time
 * @property string $update_time
 */
class BetOrderDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bet_order_detail';

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
    protected $casts = ['id' => 'integer', 'bet_id' => 'integer', 'sport_id' => 'integer', 'league_id' => 'integer', 'region_id' => 'integer', 'home_score' => 'integer', 'away_score' => 'integer', 'odds_in_user_style' => 'float', 'point' => 'float', 'line_type_id' => 'integer', 'is_live' => 'integer', 'period_num' => 'integer', 'period_set_id' => 'integer', 'match_id' => 'integer', 'single_result_id' => 'integer', 'event_part_id' => 'integer', 'option_num' => 'integer', 'match_state' => 'integer', 'translate' => 'integer'];
}

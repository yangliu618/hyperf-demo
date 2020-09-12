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
 * @property int $sport_id
 * @property int $region_id
 * @property int $league_id
 * @property int $line_type_id
 * @property int $period_set_id
 * @property int $period_num
 * @property float $profit_amount
 * @property int $profit_num
 * @property int $win_num
 * @property int $type
 * @property int $bet_num
 * @property float $bet_amount
 * @property int $time_diff
 * @property string $create_time
 * @property int $match_id
 * @property int $is_live
 * @property string $match_detail
 * @property string $your_bet
 * @property string $league_name
 * @property string $game_start_time
 * @property string $bet_id
 * @property string $bet_time
 */
class TblRiskTotal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_total';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'sport_id' => 'integer', 'region_id' => 'integer', 'league_id' => 'integer', 'line_type_id' => 'integer', 'period_set_id' => 'integer', 'period_num' => 'integer', 'profit_amount' => 'float', 'profit_num' => 'integer', 'win_num' => 'integer', 'type' => 'integer', 'bet_num' => 'integer', 'bet_amount' => 'float', 'time_diff' => 'integer', 'match_id' => 'integer', 'is_live' => 'integer'];
}

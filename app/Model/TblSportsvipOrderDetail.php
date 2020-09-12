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
 * @property int $order_num
 * @property int $match_id
 * @property int $match_peroid_id
 * @property string $match_time
 * @property int $sport_id
 * @property string $sport_name
 * @property int $region_id
 * @property string $region_name
 * @property int $league_id
 * @property string $league_name
 * @property string $home_team
 * @property string $away_team
 * @property int $market_id
 * @property string $market_name
 * @property int $event_partner_id
 * @property int $period_num
 * @property string $period_name
 * @property int $is_live
 * @property int $odds_id
 * @property float $odds_value
 * @property float $argument
 * @property string $score
 * @property string $stake_name
 * @property int $stake_status
 * @property string $stake_status_name
 * @property string $final_score
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class TblSportsvipOrderDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_sportsvip_order_detail';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'order_num' => 'integer', 'match_id' => 'integer', 'match_peroid_id' => 'integer', 'sport_id' => 'integer', 'region_id' => 'integer', 'league_id' => 'integer', 'market_id' => 'integer', 'event_partner_id' => 'integer', 'period_num' => 'integer', 'is_live' => 'integer', 'odds_id' => 'integer', 'odds_value' => 'float', 'argument' => 'float', 'stake_status' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}

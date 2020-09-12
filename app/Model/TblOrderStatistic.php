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
 * @property int $match_id
 * @property int $sport_id
 * @property string $sport_name
 * @property int $region_id
 * @property string $region_name
 * @property int $league_id
 * @property string $league_name
 * @property string $home_team
 * @property string $away_team
 * @property int $is_live
 * @property int $order_count
 * @property int $order_count_live
 * @property int $order_count_total
 * @property float $stack_count
 * @property float $stack_count_live
 * @property float $stack_count_total
 * @property float $win_lose
 * @property float $win_lose_live
 * @property float $win_lose_total
 * @property string $match_time
 * @property string $create_time
 * @property string $update_time
 */
class TblOrderStatistic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_order_statistics';

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
    protected $casts = ['id' => 'integer', 'match_id' => 'integer', 'sport_id' => 'integer', 'region_id' => 'integer', 'league_id' => 'integer', 'is_live' => 'integer', 'order_count' => 'integer', 'order_count_live' => 'integer', 'order_count_total' => 'integer', 'stack_count' => 'float', 'stack_count_live' => 'float', 'stack_count_total' => 'float', 'win_lose' => 'float', 'win_lose_live' => 'float', 'win_lose_total' => 'float'];
}

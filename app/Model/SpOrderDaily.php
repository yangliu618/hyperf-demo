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
 * @property int $sport_id
 * @property string $sport_name
 * @property int $region_id
 * @property string $region_name
 * @property int $league_id
 * @property string $league_name
 * @property int $market_id
 * @property string $market_name
 * @property int $is_live
 * @property int $combinations
 * @property int $is_telemarketing
 * @property int $bet_all
 * @property int $bet_count
 * @property int $bet_website_all
 * @property int $bet_coupon
 * @property int $bet_rebate
 * @property int $bet_people
 * @property int $win_or_lose
 * @property int $state
 * @property string $query_date
 * @property string $update_at
 * @property string $create_at
 */
class SpOrderDaily extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sp_order_daily';

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
    protected $casts = ['id' => 'integer', 'sport_id' => 'integer', 'region_id' => 'integer', 'league_id' => 'integer', 'market_id' => 'integer', 'is_live' => 'integer', 'combinations' => 'integer', 'is_telemarketing' => 'integer', 'bet_all' => 'integer', 'bet_count' => 'integer', 'bet_website_all' => 'integer', 'bet_coupon' => 'integer', 'bet_rebate' => 'integer', 'bet_people' => 'integer', 'win_or_lose' => 'integer', 'state' => 'integer'];
}

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
 * @property int $bet_id
 * @property int $language_id
 * @property int $sport_id
 * @property string $sport_name
 * @property int $league_id
 * @property string $league_name
 * @property int $region_id
 * @property string $region_name
 * @property string $home_team
 * @property string $away_team
 * @property int $market_id
 * @property string $market_name
 * @property int $period_num
 * @property int $period_set_id
 * @property string $period_name
 * @property int $single_result_id
 * @property string $single_result_name
 * @property string $your_bet
 * @property int $combinations
 * @property string $combination_name
 * @property string $bet_type_name
 * @property string $update_time
 * @property string $create_time
 */
class BetOrderI18n extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bet_order_i18n';

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
    protected $casts = ['id' => 'integer', 'match_id' => 'integer', 'bet_id' => 'integer', 'language_id' => 'integer', 'sport_id' => 'integer', 'league_id' => 'integer', 'region_id' => 'integer', 'market_id' => 'integer', 'period_num' => 'integer', 'period_set_id' => 'integer', 'single_result_id' => 'integer', 'combinations' => 'integer'];
}

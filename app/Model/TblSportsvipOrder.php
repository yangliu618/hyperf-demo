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
 * @property string $partner_user_id
 * @property int $bet_type_id
 * @property string $bet_type_name
 * @property int $combinations_id
 * @property string $combinations_name
 * @property int $phase
 * @property int $phase_status
 * @property int $bet_result
 * @property float $order_amount
 * @property float $estimated_bonus
 * @property float $real_bonus
 * @property float $win_or_lose
 * @property float $total_odds
 * @property int $odds_type
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class TblSportsvipOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_sportsvip_order';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'order_num' => 'integer', 'bet_type_id' => 'integer', 'combinations_id' => 'integer', 'phase' => 'integer', 'phase_status' => 'integer', 'bet_result' => 'integer', 'order_amount' => 'float', 'estimated_bonus' => 'float', 'real_bonus' => 'float', 'win_or_lose' => 'float', 'total_odds' => 'float', 'odds_type' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}

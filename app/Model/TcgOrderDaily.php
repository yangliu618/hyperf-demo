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
 * @property int $partner_id
 * @property string $game_type
 * @property int $product_id
 * @property string $game_code
 * @property int $bet_amount
 * @property int $bet_count
 * @property int $bet_rebate_amount
 * @property int $bet_user
 * @property int $win_or_lose
 * @property int $return_amount
 * @property string $query_date
 * @property string $update_at
 * @property string $create_at
 */
class TcgOrderDaily extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tcg_order_daily';

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
    protected $casts = ['id' => 'integer', 'partner_id' => 'integer', 'product_id' => 'integer', 'bet_amount' => 'integer', 'bet_count' => 'integer', 'bet_rebate_amount' => 'integer', 'bet_user' => 'integer', 'win_or_lose' => 'integer', 'return_amount' => 'integer'];
}

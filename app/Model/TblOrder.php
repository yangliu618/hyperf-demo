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
 * @property int $partner_id
 * @property string $partner_user_id
 * @property int $bet_type_id
 * @property string $bet_type_name
 * @property int $bet_multi_code
 * @property string $bet_multi_name
 * @property int $phase
 * @property int $phase_status
 * @property int $bet_result
 * @property int $result_type
 * @property string $phase_updated_at
 * @property float $order_amount
 * @property float $valid_amount
 * @property float $estimated_bonus
 * @property float $real_bonus
 * @property float $win_or_lose
 * @property float $odds_value
 * @property float $original_amount
 * @property string $currency_code
 * @property string $order_num_xref
 * @property int $batch_num
 * @property int $platform
 * @property int $odds_type
 * @property string $ip
 * @property int $statistics
 * @property string $fail_reason
 * @property int $version
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class TblOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_order';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'order_num' => 'integer', 'partner_id' => 'integer', 'bet_type_id' => 'integer', 'bet_multi_code' => 'integer', 'phase' => 'integer', 'phase_status' => 'integer', 'bet_result' => 'integer', 'result_type' => 'integer', 'order_amount' => 'float', 'valid_amount' => 'float', 'estimated_bonus' => 'float', 'real_bonus' => 'float', 'win_or_lose' => 'float', 'odds_value' => 'float', 'original_amount' => 'float', 'batch_num' => 'integer', 'platform' => 'integer', 'odds_type' => 'integer', 'statistics' => 'integer', 'version' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}

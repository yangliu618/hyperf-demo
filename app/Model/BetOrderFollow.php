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
 * @property int $bet_id
 * @property int $user_id
 * @property int $guest_id
 * @property int $order_state
 * @property float $stake
 * @property float $valid_amount
 * @property int $result_type
 * @property float $amount
 * @property string $odds
 * @property float $point
 * @property float $win_or_lose
 * @property int $anchor_id
 * @property string $anchor_name
 * @property int $expert_id
 * @property string $expert_name
 * @property int $followed_bet_id
 * @property string $recharge_order_id
 * @property int $payed_status
 * @property int $live_coupon_id
 * @property float $bet_gain
 * @property float $bonus_amount
 * @property int $active_status
 * @property string $create_time
 * @property string $update_time
 */
class BetOrderFollow extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bet_order_follow';

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
    protected $casts = ['bet_id' => 'integer', 'user_id' => 'integer', 'guest_id' => 'integer', 'order_state' => 'integer', 'stake' => 'float', 'valid_amount' => 'float', 'result_type' => 'integer', 'amount' => 'float', 'point' => 'float', 'win_or_lose' => 'float', 'anchor_id' => 'integer', 'expert_id' => 'integer', 'followed_bet_id' => 'integer', 'payed_status' => 'integer', 'live_coupon_id' => 'integer', 'bet_gain' => 'float', 'bonus_amount' => 'float', 'active_status' => 'integer'];
}

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
 * @property string $bill_no
 * @property string $batch_id
 * @property int $user_id
 * @property string $username
 * @property float $bet_amount
 * @property float $valid_bet_amount
 * @property float $win_amount
 * @property float $net_win_amount
 * @property string $currency
 * @property string $bet_time
 * @property string $settlement_time
 * @property int $order_status
 * @property string $table_code
 * @property string $game_type
 * @property string $play_type
 * @property string $ip
 * @property string $round
 * @property string $device_type
 * @property int $is_flowed
 * @property string $create_time
 * @property string $last_update_time
 */
class AgqjOrderList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agqj_order_list';

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
    protected $casts = ['id' => 'integer', 'bet_id' => 'integer', 'user_id' => 'integer', 'bet_amount' => 'float', 'valid_bet_amount' => 'float', 'win_amount' => 'float', 'net_win_amount' => 'float', 'order_status' => 'integer', 'is_flowed' => 'integer'];
}

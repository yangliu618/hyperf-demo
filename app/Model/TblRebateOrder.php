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
 * @property string $bet_id
 * @property string $game_type
 * @property int $order_state
 * @property float $stake
 * @property float $odds
 * @property float $valid_rebate_amount
 * @property int $rebate_status
 * @property string $ticket_id
 * @property string $creation_date
 * @property string $update_time
 * @property string $add_time
 * @property string $remark
 */
class TblRebateOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_rebate_order';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'order_state' => 'integer', 'stake' => 'float', 'odds' => 'float', 'valid_rebate_amount' => 'float', 'rebate_status' => 'integer'];
}

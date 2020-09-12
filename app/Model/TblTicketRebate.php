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
 * @property string $order_no
 * @property int $rebate_type
 * @property int $platform_type
 * @property string $ticket_id
 * @property string $user_name
 * @property string $real_name
 * @property int $user_level
 * @property float $invalid_amount
 * @property string $game_room
 * @property float $amount_all
 * @property float $rebate_percentage
 * @property float $settlement_amount
 * @property int $review_status
 * @property string $review_person
 * @property string $rebate_start_time
 * @property string $rebate_end_time
 * @property string $create_time
 * @property string $update_time
 */
class TblTicketRebate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_rebate';

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
    protected $casts = ['id' => 'integer', 'rebate_type' => 'integer', 'platform_type' => 'integer', 'user_level' => 'integer', 'invalid_amount' => 'float', 'amount_all' => 'float', 'rebate_percentage' => 'float', 'settlement_amount' => 'float', 'review_status' => 'integer'];
}

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
 * @property string $relation_id
 * @property string $ticket_id
 * @property int $user_id
 * @property string $username
 * @property string $real_name
 * @property int $currency
 * @property int $corrected_type
 * @property int $pv_id
 * @property int $flow_multi
 * @property float $available_change
 * @property float $lock_change
 * @property float $bonus_change
 * @property string $create_time
 * @property string $update_time
 */
class TblTicketUpdateQuotum extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_update_quota';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'currency' => 'integer', 'corrected_type' => 'integer', 'pv_id' => 'integer', 'flow_multi' => 'integer', 'available_change' => 'float', 'lock_change' => 'float', 'bonus_change' => 'float'];
}

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
 * @property string $ticket_id
 * @property int $ticket_type
 * @property int $creator
 * @property string $creator_name
 * @property int $operator
 * @property string $operator_name
 * @property int $status
 * @property int $result
 * @property int $system_check_result
 * @property int $is_lock
 * @property int $revocation_status
 * @property string $revocation_time
 * @property string $revocation_operator
 * @property string $system_check_time
 * @property string $create_time
 * @property string $update_time
 */
class TblTicketAll extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_all';

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
    protected $casts = ['id' => 'integer', 'ticket_type' => 'integer', 'creator' => 'integer', 'operator' => 'integer', 'status' => 'integer', 'result' => 'integer', 'system_check_result' => 'integer', 'is_lock' => 'integer', 'revocation_status' => 'integer'];
}

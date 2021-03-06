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
 * @property string $user_name
 * @property string $real_name
 * @property string $old_contact_number
 * @property string $new_contact_number
 * @property string $create_time
 * @property string $update_time
 */
class TblTicketUpdatePhone extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_update_phone';

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
    protected $casts = ['id' => 'integer'];
}

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
 * @property int $user_id
 * @property string $user_name
 * @property string $contact_information
 * @property string $customer
 * @property int $customer_id
 * @property int $type
 * @property string $note
 * @property string $admin_note
 * @property int $status
 * @property int $is_assigned
 * @property string $operator_name
 * @property int $operator_id
 * @property int $batch_id
 * @property string $create_time
 * @property string $update_time
 * @property string $execute_time
 * @property string $first_call_time
 */
class TblTelemarketing extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_telemarketing';

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
    protected $casts = ['user_id' => 'integer', 'customer_id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'is_assigned' => 'integer', 'operator_id' => 'integer', 'batch_id' => 'integer'];
}

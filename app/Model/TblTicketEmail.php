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
 * @property int $email_type
 * @property string $addressee
 * @property string $cc
 * @property int $operator_id
 * @property string $operator_name
 * @property string $create_name
 * @property int $create_id
 * @property string $condition
 * @property int $status
 * @property string $remake
 * @property string $create_time
 * @property string $update_time
 */
class TblTicketEmail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_email';

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
    protected $casts = ['id' => 'integer', 'email_type' => 'integer', 'operator_id' => 'integer', 'create_id' => 'integer', 'status' => 'integer'];
}

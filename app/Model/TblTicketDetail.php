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
 * @property int $business_type
 * @property string $client_data
 * @property string $formal_standard
 * @property int $formal_result
 * @property int $system_retrial
 * @property int $review_status
 * @property string $review_department
 */
class TblTicketDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_detail';

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
    protected $casts = ['id' => 'integer', 'business_type' => 'integer', 'formal_result' => 'integer', 'system_retrial' => 'integer', 'review_status' => 'integer'];
}

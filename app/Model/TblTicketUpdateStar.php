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
 * @property int $star_level
 * @property int $minimum_star_level
 * @property int $credit_rate
 * @property string $old_star_info
 * @property string $create_time
 * @property string $update_time
 */
class TblTicketUpdateStar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_update_star';

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
    protected $casts = ['id' => 'integer', 'star_level' => 'integer', 'minimum_star_level' => 'integer', 'credit_rate' => 'integer'];
}

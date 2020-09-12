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
 * @property string $user_name
 * @property int $event
 * @property int $bet_id
 * @property int $inventory
 * @property int $related_user_id
 * @property string $extra_info
 * @property int $status
 * @property int $check
 * @property string $create_time
 * @property string $update_time
 */
class TblLiveUserFollow extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_live_user_follow';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'event' => 'integer', 'bet_id' => 'integer', 'inventory' => 'integer', 'related_user_id' => 'integer', 'status' => 'integer', 'check' => 'integer'];
}

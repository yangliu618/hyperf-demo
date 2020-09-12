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
 * @property int $star_value
 * @property float $honor_value
 * @property float $honor_left
 * @property int $type
 * @property int $update_user
 * @property int $status
 * @property int $spending_type
 * @property string $note
 * @property string $create_time
 * @property string $update_time
 * @property int $mix_id
 */
class TblStarHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_star_history';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'star_value' => 'integer', 'honor_value' => 'float', 'honor_left' => 'float', 'type' => 'integer', 'update_user' => 'integer', 'status' => 'integer', 'spending_type' => 'integer', 'mix_id' => 'integer'];
}

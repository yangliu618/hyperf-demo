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
 * @property string $group_name
 * @property string $group_desc
 * @property int $user_count
 * @property string $privilege
 * @property string $group_limit
 * @property float $tax_rate
 * @property string $last_update_user
 * @property int $is_system
 * @property int $system_type
 * @property int $group_status
 * @property int $group_follow
 * @property string $create_user
 * @property string $add_time
 * @property string $update_time
 * @property int $platform_id
 * @property string $platform
 * @property int $priority
 */
class TblUserGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_user_group';

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
    protected $casts = ['id' => 'integer', 'user_count' => 'integer', 'tax_rate' => 'float', 'is_system' => 'integer', 'system_type' => 'integer', 'group_status' => 'integer', 'group_follow' => 'integer', 'platform_id' => 'integer', 'priority' => 'integer'];
}

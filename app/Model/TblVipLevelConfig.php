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
 * @property int $star
 * @property int $group_id
 * @property int $min_value
 * @property int $safe_min_value
 * @property int $safe_cycle
 * @property string $calc_condition
 * @property string $extend_condition
 * @property int $withdraw_rate
 * @property int $withdraw_limit
 * @property string $create_time
 * @property string $update_time
 */
class TblVipLevelConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_vip_level_config';

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
    protected $casts = ['id' => 'integer', 'star' => 'integer', 'group_id' => 'integer', 'min_value' => 'integer', 'safe_min_value' => 'integer', 'safe_cycle' => 'integer', 'withdraw_rate' => 'integer', 'withdraw_limit' => 'integer'];
}

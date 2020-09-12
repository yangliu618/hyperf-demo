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
 * @property float $recharge_value
 * @property float $honor_value
 * @property int $before_level
 * @property int $current_level
 * @property int $change_status
 * @property string $check_date
 * @property string $create_time
 * @property string $update_time
 */
class TblVipLevelSettlement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_vip_level_settlement';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'recharge_value' => 'float', 'honor_value' => 'float', 'before_level' => 'integer', 'current_level' => 'integer', 'change_status' => 'integer'];
}

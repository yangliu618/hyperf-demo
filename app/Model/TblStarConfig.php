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
 * @property int $up_min_value
 * @property string $up_condition
 * @property int $up_recharge_value
 * @property int $up_bet_value
 * @property int $down_condition
 * @property int $down_value
 * @property string $create_time
 * @property string $update_time
 */
class TblStarConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_star_config';

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
    protected $casts = ['id' => 'integer', 'star' => 'integer', 'up_min_value' => 'integer', 'up_recharge_value' => 'integer', 'up_bet_value' => 'integer', 'down_condition' => 'integer', 'down_value' => 'integer'];
}

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
 * @property int $coupon_type
 * @property int $money_min
 * @property int $bonus
 * @property float $flow_multi
 * @property int $times
 * @property int $activation_min
 * @property string $coupon_config
 * @property string $create_time
 * @property string $update_time
 * @property int $coupon_status
 */
class TblLiveCouponConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_live_coupon_config';

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
    protected $casts = ['id' => 'integer', 'coupon_type' => 'integer', 'money_min' => 'integer', 'bonus' => 'integer', 'flow_multi' => 'float', 'times' => 'integer', 'activation_min' => 'integer', 'coupon_status' => 'integer'];
}

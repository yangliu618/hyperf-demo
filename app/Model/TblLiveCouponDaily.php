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
 * @property string $date
 * @property int $sum_count
 * @property float $sum_bonus_amount
 * @property string $guest_ids
 * @property int $documentary_activate_count
 * @property float $deposit
 * @property float $activation
 * @property string $create_time
 * @property string $update_time
 */
class TblLiveCouponDaily extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_live_coupon_daily';

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
    protected $casts = ['id' => 'integer', 'sum_count' => 'integer', 'sum_bonus_amount' => 'float', 'documentary_activate_count' => 'integer', 'deposit' => 'float', 'activation' => 'float'];
}

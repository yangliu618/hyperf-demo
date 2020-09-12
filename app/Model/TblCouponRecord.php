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
 * @property int $coupon_id
 * @property int $coupon_type
 * @property float $amount
 * @property float $bonus
 * @property int $status
 * @property int $is_aff
 * @property string $ip
 * @property string $note
 * @property string $create_time
 * @property string $update_time
 */
class TblCouponRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_coupon_record';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'coupon_id' => 'integer', 'coupon_type' => 'integer', 'amount' => 'float', 'bonus' => 'float', 'status' => 'integer', 'is_aff' => 'integer'];
}

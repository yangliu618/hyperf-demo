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
 * @property string $title
 * @property string $banner_img
 * @property string $url
 * @property int $status
 * @property int $checking
 * @property int $coupon_type
 * @property string $duty_person
 * @property string $start_time
 * @property string $end_time
 * @property int $join_person_num
 * @property int $total_money
 * @property string $coupon_config
 * @property string $note
 * @property string $check_time
 * @property string $add_time
 * @property string $update_time
 * @property string $coupon_code
 */
class TblCoupon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_coupon';

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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'checking' => 'integer', 'coupon_type' => 'integer', 'join_person_num' => 'integer', 'total_money' => 'integer'];
}

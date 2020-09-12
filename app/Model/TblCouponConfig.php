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
 * @property string $description
 * @property int $coupon_type
 * @property int $model_type
 * @property string $coupon_config
 * @property string $extend_config
 * @property int $is_show
 * @property int $is_share
 * @property string $share_config
 * @property int $is_rebate
 * @property int $check_type
 * @property string $join_user_conf
 * @property string $submit_person
 * @property string $start_time
 * @property string $end_time
 * @property float $coupon_budget
 * @property int $join_num_limit
 * @property int $join_person_num
 * @property float $total_money
 * @property string $coupon_code
 * @property int $assign_type
 * @property string $note
 * @property int $coupon_status
 * @property string $check_time
 * @property int $superior_type
 * @property int $partner_id
 * @property string $pv_id
 * @property string $game_type
 * @property string $add_time
 * @property string $update_time
 */
class TblCouponConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_coupon_config';

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
    protected $casts = ['id' => 'integer', 'coupon_type' => 'integer', 'model_type' => 'integer', 'is_show' => 'integer', 'is_share' => 'integer', 'is_rebate' => 'integer', 'check_type' => 'integer', 'coupon_budget' => 'float', 'join_num_limit' => 'integer', 'join_person_num' => 'integer', 'total_money' => 'float', 'assign_type' => 'integer', 'coupon_status' => 'integer', 'superior_type' => 'integer', 'partner_id' => 'integer'];
}

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
 * @property int $child_id
 * @property string $value
 * @property int $pc
 * @property int $wap
 * @property int $min
 * @property int $max
 * @property string $recommend_pay
 * @property int $recommend_pay_select
 * @property int $is_hot
 * @property int $status
 * @property int $old_type
 * @property int $priority
 * @property string $idesc
 * @property string $icon
 * @property string $note
 * @property int $child_status
 */
class TblLivePayLayoutConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_live_pay_layout_config';

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
    protected $casts = ['id' => 'integer', 'child_id' => 'integer', 'pc' => 'integer', 'wap' => 'integer', 'min' => 'integer', 'max' => 'integer', 'recommend_pay_select' => 'integer', 'is_hot' => 'integer', 'status' => 'integer', 'old_type' => 'integer', 'priority' => 'integer', 'child_status' => 'integer'];
}

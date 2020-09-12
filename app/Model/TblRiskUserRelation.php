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
 * @property int $group_id
 * @property int $user_id
 * @property string $name
 * @property string $relate_name
 * @property string $relate_phone
 * @property string $relate_device_code
 * @property string $relate_data
 * @property string $relate_ip
 * @property int $status
 * @property int $relate_user_id
 * @property int $relate_mark
 * @property string $remark
 * @property int $relate_bet_id
 * @property string $create_time
 * @property string $update_time
 * @property string $sure_time
 * @property string $cancel_time
 */
class TblRiskUserRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_user_relation';

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
    protected $casts = ['id' => 'integer', 'group_id' => 'integer', 'user_id' => 'integer', 'status' => 'integer', 'relate_user_id' => 'integer', 'relate_mark' => 'integer', 'relate_bet_id' => 'integer'];
}

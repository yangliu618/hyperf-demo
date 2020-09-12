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
 * @property int $deposit_id
 * @property int $user_id
 * @property int $bet_id
 * @property float $dep_origin_flow
 * @property float $dep_current_flow
 * @property float $used_flow
 * @property float $ori_withdrawable_balance
 * @property float $ori_un_withdrawable_balance
 * @property float $ori_bonus_balance
 * @property float $result_withdrawable_balance
 * @property float $result_un_withdrawable_balance
 * @property float $result_bonus_balance
 * @property string $remark
 * @property string $create_time
 * @property string $update_time
 * @property int $is_del
 */
class TblAccountFlowRemainUsedLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_account_flow_remain_used_log';

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
    protected $casts = ['id' => 'integer', 'deposit_id' => 'integer', 'user_id' => 'integer', 'bet_id' => 'integer', 'dep_origin_flow' => 'float', 'dep_current_flow' => 'float', 'used_flow' => 'float', 'ori_withdrawable_balance' => 'float', 'ori_un_withdrawable_balance' => 'float', 'ori_bonus_balance' => 'float', 'result_withdrawable_balance' => 'float', 'result_un_withdrawable_balance' => 'float', 'result_bonus_balance' => 'float', 'is_del' => 'integer'];
}

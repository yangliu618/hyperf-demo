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
 * @property string $username
 * @property int $flow_account_id
 * @property int $money_change
 * @property int $lock_money_change
 * @property int $bonus_change
 * @property int $flow_change
 * @property int $change_type
 * @property string $mix_id
 * @property string $create_time
 */
class MoneyFlowLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_flow_logs';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'flow_account_id' => 'integer', 'money_change' => 'integer', 'lock_money_change' => 'integer', 'bonus_change' => 'integer', 'flow_change' => 'integer', 'change_type' => 'integer'];
}

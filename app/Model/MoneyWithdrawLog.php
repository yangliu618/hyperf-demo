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
 * @property int $wallet_record_id
 * @property int $flow_account_id
 * @property int $withdraw_change
 * @property string $create_time
 */
class MoneyWithdrawLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_withdraw_logs';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'wallet_record_id' => 'integer', 'flow_account_id' => 'integer', 'withdraw_change' => 'integer'];
}

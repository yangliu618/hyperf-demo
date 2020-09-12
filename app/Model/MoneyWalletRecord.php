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
 * @property int $wallet_id
 * @property int $pv_id
 * @property int $withdraw_change
 * @property int $withdraw_balance
 * @property int $bonus_change
 * @property int $bonus_balance
 * @property int $freeze_change
 * @property int $freeze_balance
 * @property int $lock_change
 * @property int $lock_balance
 * @property int $available_change
 * @property int $available_balance
 * @property int $change_type
 * @property string $remark
 * @property string $mix_id
 * @property string $create_time
 */
class MoneyWalletRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_wallet_records';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'wallet_id' => 'integer', 'pv_id' => 'integer', 'withdraw_change' => 'integer', 'withdraw_balance' => 'integer', 'bonus_change' => 'integer', 'bonus_balance' => 'integer', 'freeze_change' => 'integer', 'freeze_balance' => 'integer', 'lock_change' => 'integer', 'lock_balance' => 'integer', 'available_change' => 'integer', 'available_balance' => 'integer', 'change_type' => 'integer'];
}

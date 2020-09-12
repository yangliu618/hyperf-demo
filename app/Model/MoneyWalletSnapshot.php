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
 * @property int $pv_id
 * @property int $available_money
 * @property int $lock_money
 * @property int $bonus
 * @property int $withdraw_money
 * @property int $freeze_money
 * @property string $wallet_date
 * @property string $create_time
 */
class MoneyWalletSnapshot extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_wallet_snapshots';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'pv_id' => 'integer', 'available_money' => 'integer', 'lock_money' => 'integer', 'bonus' => 'integer', 'withdraw_money' => 'integer', 'freeze_money' => 'integer'];
}

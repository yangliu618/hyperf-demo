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
 * @property string $transfer_no
 * @property string $reference_no
 * @property int $user_id
 * @property string $username
 * @property int $pv_id
 * @property int $target_pv_id
 * @property int $money
 * @property int $source_before_money
 * @property int $target_after_money
 * @property int $transaction_status
 * @property string $error_desc
 * @property string $create_time
 * @property string $update_time
 */
class MoneyTransferRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_transfer_records';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'pv_id' => 'integer', 'target_pv_id' => 'integer', 'money' => 'integer', 'source_before_money' => 'integer', 'target_after_money' => 'integer', 'transaction_status' => 'integer'];
}

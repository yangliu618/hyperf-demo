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
 * @property string $orderNo
 * @property string $batchId
 * @property string $username
 * @property int $user_id
 * @property int $betAmount
 * @property int $validBetAmount
 * @property int $tcg_return_rebate
 * @property int $rebateAmount
 * @property int $winAmount
 * @property int $netWinAmount
 * @property int $multiple
 * @property int $chase
 * @property string $currency
 * @property string $betTime
 * @property string $transactionTime
 * @property int $orderStatus
 * @property string $gameCode
 * @property string $partnerOrderNo
 * @property int $productType
 * @property int $pv_id
 * @property int $venderId
 * @property string $gameType
 * @property string $gameCate
 * @property string $playType
 * @property string $additionalInfo
 * @property int $flow_status
 * @property string $createTime
 * @property string $lastUpdateTime
 */
class TcgOrderList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tcg_order_list';

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
    protected $casts = ['user_id' => 'integer', 'betAmount' => 'integer', 'validBetAmount' => 'integer', 'tcg_return_rebate' => 'integer', 'rebateAmount' => 'integer', 'winAmount' => 'integer', 'netWinAmount' => 'integer', 'multiple' => 'integer', 'chase' => 'integer', 'orderStatus' => 'integer', 'productType' => 'integer', 'pv_id' => 'integer', 'venderId' => 'integer', 'flow_status' => 'integer'];
}

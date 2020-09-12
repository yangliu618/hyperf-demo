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
 * @property string $ticket_id
 * @property int $account_type
 * @property int $deposit_source
 * @property int $bank_data
 * @property int $quota_correct
 * @property int $quota_compute
 * @property int $single_rebate
 * @property int $total_coupon_amount
 * @property int $flow_check
 * @property int $settle_account_withdraw
 * @property int $settle_account_profit
 * @property int $settle_account_amount
 * @property int $area_restrict
 * @property int $last_check_status
 */
class TblTicketDetailList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_detail_list';

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
    protected $casts = ['id' => 'integer', 'account_type' => 'integer', 'deposit_source' => 'integer', 'bank_data' => 'integer', 'quota_correct' => 'integer', 'quota_compute' => 'integer', 'single_rebate' => 'integer', 'total_coupon_amount' => 'integer', 'flow_check' => 'integer', 'settle_account_withdraw' => 'integer', 'settle_account_profit' => 'integer', 'settle_account_amount' => 'integer', 'area_restrict' => 'integer', 'last_check_status' => 'integer'];
}

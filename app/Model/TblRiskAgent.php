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
 * @property int $u_id
 * @property string $login_name
 * @property int $aff_grade
 * @property int $aff_type
 * @property float $deposit
 * @property float $withdrawal
 * @property float $effective_amount
 * @property float $bonus
 * @property float $rebate
 * @property float $profit_loss
 * @property float $nprofit_loss
 * @property int $offline_number
 * @property int $active_customer
 * @property string $risk_condition
 * @property string $risk_condition_id
 * @property int $status
 * @property int $risk_status
 * @property string $risk_type
 * @property string $risk_time
 * @property string $cancel_time
 * @property string $create_time
 * @property string $update_time
 * @property int $risk_agent_config_id
 * @property int $template
 */
class TblRiskAgent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_agent';

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
    protected $casts = ['id' => 'integer', 'u_id' => 'integer', 'aff_grade' => 'integer', 'aff_type' => 'integer', 'deposit' => 'float', 'withdrawal' => 'float', 'effective_amount' => 'float', 'bonus' => 'float', 'rebate' => 'float', 'profit_loss' => 'float', 'nprofit_loss' => 'float', 'offline_number' => 'integer', 'active_customer' => 'integer', 'status' => 'integer', 'risk_status' => 'integer', 'risk_agent_config_id' => 'integer', 'template' => 'integer'];
}

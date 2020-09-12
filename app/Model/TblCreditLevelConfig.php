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
 * @property int $credit_rate
 * @property int $recharge_rate
 * @property int $recharge_sum
 * @property int $recharge_max
 * @property int $active_days
 * @property int $valid_bet_amount
 * @property int $registered_age
 * @property string $create_time
 * @property string $update_time
 */
class TblCreditLevelConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_credit_level_config';

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
    protected $casts = ['id' => 'integer', 'credit_rate' => 'integer', 'recharge_rate' => 'integer', 'recharge_sum' => 'integer', 'recharge_max' => 'integer', 'active_days' => 'integer', 'valid_bet_amount' => 'integer', 'registered_age' => 'integer'];
}

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
 * @property int $status
 * @property string $platform_status
 * @property string $pay_type
 * @property string $company_name
 * @property string $class_name
 * @property float $min
 * @property float $max
 * @property string $recommend_pay
 * @property string $recommend_pay_select
 * @property string $is_hot
 * @property string $idesc
 * @property string $icon
 * @property string $bank_list
 * @property string $name
 * @property string $log
 * @property string $credit_level
 * @property int $weights
 * @property int $handling_fee
 */
class MoneyPayConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_pay_config';

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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'min' => 'float', 'max' => 'float', 'weights' => 'integer', 'handling_fee' => 'integer'];
}

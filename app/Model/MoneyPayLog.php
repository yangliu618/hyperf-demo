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
 * @property string $order_id
 * @property string $company
 * @property string $action
 * @property string $return_code
 * @property string $message
 * @property string $json_data
 * @property string $create_time
 */
class MoneyPayLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'money_pay_log';

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
    protected $casts = ['id' => 'integer'];
}

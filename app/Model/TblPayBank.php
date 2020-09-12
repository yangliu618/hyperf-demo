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
 * @property string $bank_code
 * @property string $account_name
 * @property string $account_no
 * @property string $grade
 * @property string $user_level
 * @property float $limit_amount
 * @property string $province
 * @property string $city
 * @property string $bank_name
 * @property string $branch
 * @property string $area_limit
 * @property string $created_by
 * @property string $ip_address
 * @property string $product_id
 * @property string $remarks
 * @property int $is_show
 * @property string $currency
 * @property string $special_member
 * @property int $type
 * @property string $create_time
 * @property string $update_time
 */
class TblPayBank extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_pay_bank';

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
    protected $casts = ['id' => 'integer', 'limit_amount' => 'float', 'is_show' => 'integer', 'type' => 'integer'];
}

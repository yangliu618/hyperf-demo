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
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property int $id_type
 * @property string $id_number
 * @property string $birthday
 * @property string $address
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $country_code
 * @property string $province_id
 * @property string $city_id
 * @property string $post_code
 * @property int $sex
 * @property string $wechat
 * @property string $qq
 * @property string $aimage
 * @property string $bimage
 * @property string $note
 * @property int $is_auth
 * @property string $create_time
 * @property string $update_time
 */
class TblUserKyc extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_user_kyc';

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
    protected $casts = ['user_id' => 'integer', 'id_type' => 'integer', 'sex' => 'integer', 'is_auth' => 'integer'];
}

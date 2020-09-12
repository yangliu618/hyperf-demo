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
 * @property int $min_level_type
 * @property string $min_level_start_time
 * @property string $min_level_end_time
 * @property string $referral_code
 * @property string $invite_code
 * @property string $curreny
 * @property int $language_id
 * @property int $timezone_id
 * @property string $language_name
 * @property string $timezone_name
 * @property int $odds_id
 * @property string $odds_name
 * @property int $odd_style
 * @property string $first_login_time
 * @property int $ip
 * @property string $mac
 * @property string $create_time
 * @property string $update_time
 * @property string $payment_reserve_information
 * @property int $identity_flag
 */
class TblUserExtend extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_user_extend';

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
    protected $casts = ['user_id' => 'integer', 'min_level_type' => 'integer', 'language_id' => 'integer', 'timezone_id' => 'integer', 'odds_id' => 'integer', 'odd_style' => 'integer', 'ip' => 'integer', 'identity_flag' => 'integer'];
}

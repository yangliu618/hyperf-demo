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

use Hyperf\Database\Model\Events\Saving;
use Hyperf\DbConnection\Model\Model;
use Hyperf\ModelCache\Cacheable;
use Hyperf\ModelCache\CacheableInterface;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $nick_name
 * @property string $real_name
 * @property int $group_id
 * @property string $mobile_phone
 * @property string $email
 * @property int $user_level
 * @property int $init_level
 * @property int $init_bonus
 * @property int $min_level
 * @property string $credit
 * @property int $credit_rate
 * @property int $user_stop
 * @property int $user_forbid
 * @property int $limit_money
 * @property int $user_type
 * @property int $is_vip
 * @property int $is_follow
 * @property int $check_phone
 * @property int $user_status
 * @property string $reg_ip
 * @property string $last_login_ip
 * @property string $last_note
 * @property string $source_from
 * @property string $last_update_user
 * @property \Carbon\Carbon $last_login_time
 * @property \Carbon\Carbon $update_time
 * @property \Carbon\Carbon $reg_time
 * @property string $reg_site
 * @property int $superior_id
 * @property string $superior_name
 * @property int $is_telemarketing
 * @property int $is_operator_group
 * @property int $is_operator_credit_rate
 * @property int $is_tcg
 * @property  $full_name
 * @property  $username
 * @property \App\Model\TblUserCard $userCard
 */
class TblUser extends Model implements CacheableInterface
{
    use Cacheable;

    /**
     * 默认情况下，Hyperf 预期你的数据表中存在 created_at 和 updated_at 。
     * 如果你不想让 Hyperf 自动管理这两个列， 请将模型中的 $timestamps 属性设置为 false.
     *
     * @var bool
     */
    //public $timestamps = false;
    const CREATED_AT = 'reg_time';

    //创建时自动写入的字段
    const UPDATED_AT = 'last_login_time';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_user';

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
    protected $casts = ['id' => 'integer', 'group_id' => 'integer', 'user_level' => 'integer', 'init_level' => 'integer', 'init_bonus' => 'integer', 'min_level' => 'integer', 'credit_rate' => 'integer', 'user_stop' => 'integer', 'user_forbid' => 'integer', 'limit_money' => 'integer', 'user_type' => 'integer', 'is_vip' => 'integer', 'is_follow' => 'integer', 'check_phone' => 'integer', 'user_status' => 'integer', 'last_login_time' => 'datetime', 'update_time' => 'datetime', 'reg_time' => 'datetime', 'superior_id' => 'integer', 'is_telemarketing' => 'integer', 'is_operator_group' => 'integer', 'is_operator_credit_rate' => 'integer', 'is_tcg' => 'integer'];

    //当获取到的属性包含在 $dates 属性中时，都会自动转换为 Carbon 实例，允许你在属性上使用任意的 Carbon 方法
    protected $dates = ['update_time'];

    //更新时会自动更新
    public function userCard()
    {
        return $this->hasOne(TblUserCard::class, 'user_id', 'id');
    }

    //钩子函数
    public function saving(Saving $event)
    {
        $this->setCreatedAt('2020-02-22 22:22:22');
    }

    //重写已有的属性
    public function getUsernameAttribute($value)
    {
        return strtoupper($value);
    }

    //拼接返回不存在的属性
    public function getFullNameAttribute()
    {
        return $this->username . '|' . $this->mobile_phone;
    }
}

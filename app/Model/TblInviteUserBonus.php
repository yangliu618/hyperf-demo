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
 * @property string $order_no
 * @property int $user_id
 * @property int $act_type
 * @property float $total_bet
 * @property float $bonus
 * @property int $act_status
 * @property string $start_date
 * @property string $end_date
 * @property string $remark
 * @property string $update_time
 */
class TblInviteUserBonus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_invite_user_bonus';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'act_type' => 'integer', 'total_bet' => 'float', 'bonus' => 'float', 'act_status' => 'integer'];
}

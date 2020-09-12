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
 * @property int $rtype
 * @property int $user_id
 * @property int $terminal
 * @property int $user_level
 * @property float $bet_amount
 * @property float $proportion
 * @property float $rebate_amount
 * @property string $apply_time
 * @property string $ticket_id
 * @property int $status
 * @property string $update_time
 * @property string $add_time
 */
class TblRebateRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_rebate_record';

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
    protected $casts = ['id' => 'integer', 'rtype' => 'integer', 'user_id' => 'integer', 'terminal' => 'integer', 'user_level' => 'integer', 'bet_amount' => 'float', 'proportion' => 'float', 'rebate_amount' => 'float', 'status' => 'integer'];
}

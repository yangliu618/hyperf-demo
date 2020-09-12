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
 * @property string $date
 * @property int $sum_push
 * @property int $sum_follow
 * @property int $documentary_count
 * @property int $documentary_activate_count
 * @property int $valid_amount
 * @property int $amount
 * @property int $win_or_lose
 * @property string $create_time
 * @property string $update_time
 */
class TblLiveDocumentaryDaily extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_live_documentary_daily';

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
    protected $casts = ['id' => 'integer', 'sum_push' => 'integer', 'sum_follow' => 'integer', 'documentary_count' => 'integer', 'documentary_activate_count' => 'integer', 'valid_amount' => 'integer', 'amount' => 'integer', 'win_or_lose' => 'integer'];
}

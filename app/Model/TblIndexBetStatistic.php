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
 * @property int $pv_id
 * @property string $game_type
 * @property int $bet_amount
 * @property int $return_amount
 * @property int $win_or_lose
 * @property string $query_date
 * @property string $create_time
 * @property string $update_time
 */
class TblIndexBetStatistic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_index_bet_statistics';

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
    protected $casts = ['id' => 'integer', 'pv_id' => 'integer', 'bet_amount' => 'integer', 'return_amount' => 'integer', 'win_or_lose' => 'integer'];
}

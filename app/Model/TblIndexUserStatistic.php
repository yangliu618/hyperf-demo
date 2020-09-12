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
 * @property int $reg_num
 * @property int $reg_total_num
 * @property int $first_cashin_user
 * @property float $first_cashin
 * @property float $cashin
 * @property int $first_cashout_user
 * @property float $cashout
 * @property int $first_bet_user
 * @property float $avg_bet_for_user
 * @property int $bet_user
 * @property int $tcg_bet_user
 * @property int $bet_total_user
 * @property int $bet_count
 * @property int $tcg_bet_count
 * @property int $cashin_user
 * @property int $cashin_total_user
 * @property int $cashout_user
 * @property int $cashout_total_user
 * @property float $rebate
 * @property float $sp_win_or_lose
 * @property string $query_date
 * @property string $create_time
 * @property string $update_time
 */
class TblIndexUserStatistic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_index_user_statistics';

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
    protected $casts = ['id' => 'integer', 'reg_num' => 'integer', 'reg_total_num' => 'integer', 'first_cashin_user' => 'integer', 'first_cashin' => 'float', 'cashin' => 'float', 'first_cashout_user' => 'integer', 'cashout' => 'float', 'first_bet_user' => 'integer', 'avg_bet_for_user' => 'float', 'bet_user' => 'integer', 'tcg_bet_user' => 'integer', 'bet_total_user' => 'integer', 'bet_count' => 'integer', 'tcg_bet_count' => 'integer', 'cashin_user' => 'integer', 'cashin_total_user' => 'integer', 'cashout_user' => 'integer', 'cashout_total_user' => 'integer', 'rebate' => 'float', 'sp_win_or_lose' => 'float'];
}

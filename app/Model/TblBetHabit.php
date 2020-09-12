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
 * @property int $user_id
 * @property int $platform_id
 * @property string $platform
 * @property int $sport_id
 * @property string $sport_name
 * @property int $match_id
 * @property string $match_name
 * @property int $line_type_id
 * @property string $line_type_name
 * @property int $is_live
 * @property int $bets_count
 * @property int $win_count
 * @property float $win_pre
 * @property float $bets_total
 * @property float $return_total
 * @property float $return_pre
 * @property int $create_time
 * @property int $update_time
 */
class TblBetHabit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_bet_habit';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'platform_id' => 'integer', 'sport_id' => 'integer', 'match_id' => 'integer', 'line_type_id' => 'integer', 'is_live' => 'integer', 'bets_count' => 'integer', 'win_count' => 'integer', 'win_pre' => 'float', 'bets_total' => 'float', 'return_total' => 'float', 'return_pre' => 'float', 'create_time' => 'integer', 'update_time' => 'integer'];
}

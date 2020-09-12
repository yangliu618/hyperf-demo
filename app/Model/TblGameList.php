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
 * @property int $game_id
 * @property string $game_name
 * @property string $game_pic
 * @property string $game_code
 * @property int $partner_id
 * @property int $pv_id
 * @property int $type_id
 * @property int $cate_id
 * @property string $game_cate_name
 * @property string $platform
 * @property int $is_try_play
 * @property int $display_status
 * @property int $hottest
 * @property int $latest
 * @property int $web_sort
 * @property int $phone_sort
 * @property int $cp_game_id
 * @property string $cp_game_code
 * @property string $cp_game_remark
 * @property int $standard_bonus
 * @property string $create_time
 * @property string $update_time
 */
class TblGameList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_game_list';

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
    protected $casts = ['game_id' => 'integer', 'partner_id' => 'integer', 'pv_id' => 'integer', 'type_id' => 'integer', 'cate_id' => 'integer', 'is_try_play' => 'integer', 'display_status' => 'integer', 'hottest' => 'integer', 'latest' => 'integer', 'web_sort' => 'integer', 'phone_sort' => 'integer', 'cp_game_id' => 'integer', 'standard_bonus' => 'integer'];
}

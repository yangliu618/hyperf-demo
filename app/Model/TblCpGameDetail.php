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
 * @property int $game_id
 * @property string $game_code
 * @property string $display_name
 * @property int $standard_bonus
 * @property string $remark
 * @property int $sorting
 * @property int $cp_game_id
 * @property string $cp_game_code
 * @property string $cp_game_pic
 * @property string $cp_game_remark
 * @property int $cp_game_sort
 * @property string $create_time
 * @property string $update_time
 */
class TblCpGameDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_cp_game_detail';

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
    protected $casts = ['id' => 'integer', 'game_id' => 'integer', 'standard_bonus' => 'integer', 'sorting' => 'integer', 'cp_game_id' => 'integer', 'cp_game_sort' => 'integer'];
}

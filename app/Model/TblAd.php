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
 * @property int $place
 * @property string $title
 * @property int $platform
 * @property string $url
 * @property string $ad_img
 * @property int $start_time
 * @property int $end_time
 * @property int $is_show
 * @property int $status
 * @property int $view_num
 * @property int $click_num
 * @property string $last_update_user
 * @property int $language_id
 * @property string $language_name
 * @property int $add_time
 * @property int $update_time
 */
class TblAd extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ad';

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
    protected $casts = ['id' => 'integer', 'place' => 'integer', 'platform' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'is_show' => 'integer', 'status' => 'integer', 'view_num' => 'integer', 'click_num' => 'integer', 'language_id' => 'integer', 'add_time' => 'integer', 'update_time' => 'integer'];
}

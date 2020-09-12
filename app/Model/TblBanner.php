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
 * @property string $image_desc
 * @property string $image_url
 * @property string $url
 * @property int $image_sort
 * @property int $platform
 * @property int $is_show
 * @property int $is_delete
 * @property int $banner_type
 * @property string $create_time
 * @property string $update_time
 */
class TblBanner extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_banner';

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
    protected $casts = ['id' => 'integer', 'image_sort' => 'integer', 'platform' => 'integer', 'is_show' => 'integer', 'is_delete' => 'integer', 'banner_type' => 'integer'];
}

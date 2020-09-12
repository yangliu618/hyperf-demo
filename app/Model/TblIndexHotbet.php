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
 * @property int $sort
 * @property string $title
 * @property string $jump_url
 * @property int $is_show
 * @property int $status
 * @property int $device_type
 * @property int $language_id
 * @property string $language_name
 * @property string $create_time
 * @property string $update_time
 */
class TblIndexHotbet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_index_hotbet';

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
    protected $casts = ['id' => 'integer', 'sort' => 'integer', 'is_show' => 'integer', 'status' => 'integer', 'device_type' => 'integer', 'language_id' => 'integer'];
}

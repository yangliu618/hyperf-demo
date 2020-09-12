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
 * @property string $full_name
 * @property string $code
 * @property int $platform_status
 * @property int $checking
 * @property string $admin_url
 * @property int $add_time
 * @property int $start_time
 * @property int $stop_time
 * @property string $platform_maintenance_content_zh
 * @property string $platform_maintenance_content_en
 */
class TblPlatform extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_platform';

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
    protected $casts = ['id' => 'integer', 'platform_status' => 'integer', 'checking' => 'integer', 'add_time' => 'integer', 'start_time' => 'integer', 'stop_time' => 'integer'];
}

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
 * @property string $version
 * @property string $down_url
 * @property int $platform
 * @property int $app_type
 * @property string $current_host
 * @property string $user_base_url
 * @property string $bet_base_url
 * @property int $force_update
 * @property string $socketBaseUrl
 * @property string $create_time
 * @property string $update_time
 */
class TblAppInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_app_info';

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
    protected $casts = ['id' => 'integer', 'platform' => 'integer', 'app_type' => 'integer', 'force_update' => 'integer'];
}

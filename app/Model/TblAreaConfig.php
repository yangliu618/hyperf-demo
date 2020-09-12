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
 * @property string $country
 * @property int $province_id
 * @property string $province
 * @property int $city_id
 * @property string $city
 * @property string $person
 * @property int $status
 * @property string $note
 * @property string $limit_time_start
 * @property string $limit_time_end
 * @property string $create_time
 * @property string $update_time
 */
class TblAreaConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_area_config';

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
    protected $casts = ['id' => 'integer', 'province_id' => 'integer', 'city_id' => 'integer', 'status' => 'integer'];
}

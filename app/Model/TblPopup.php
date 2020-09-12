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
 * @property int $type
 * @property int $frequency
 * @property int $platform
 * @property string $title
 * @property string $content
 * @property int $activity_id
 * @property int $blade_id
 * @property string $scope
 * @property int $language_id
 * @property int $status
 * @property string $img
 * @property string $website
 * @property string $create_time
 * @property string $update_time
 * @property string $delete_time
 */
class TblPopup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_popup';

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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'frequency' => 'integer', 'platform' => 'integer', 'activity_id' => 'integer', 'blade_id' => 'integer', 'language_id' => 'integer', 'status' => 'integer'];
}

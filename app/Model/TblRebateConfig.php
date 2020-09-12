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
 * @property int $platform_id
 * @property int $rebate_type
 * @property string $rebate_config
 * @property string $start_time
 * @property string $end_time
 * @property string $exec_time
 * @property string $start_unvalid_odd
 * @property string $end_unvalid_odd
 * @property string $submit_person
 * @property int $status
 * @property string $create_time
 * @property string $add_time
 * @property string $update_time
 */
class TblRebateConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_rebate_config';

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
    protected $casts = ['id' => 'integer', 'platform_id' => 'integer', 'rebate_type' => 'integer', 'status' => 'integer'];
}

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
 * @property string $project_description
 * @property int $status
 * @property string $person
 * @property string $project_name
 * @property string $description
 * @property int $risk_type
 * @property int $is_use
 * @property string $market_ids
 * @property int $template
 * @property string $create_time
 * @property string $update_time
 */
class TblRiskMatchConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_match_config';

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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'risk_type' => 'integer', 'is_use' => 'integer', 'template' => 'integer'];
}

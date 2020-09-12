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
 * @property int $risk_type
 * @property string $condition
 * @property string $description
 * @property string $person
 * @property int $template
 * @property int $status
 * @property int $is_use
 * @property string $market_ids
 * @property string $create_time
 * @property string $update_time
 */
class TblRiskAgentConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_agent_config';

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
    protected $casts = ['id' => 'integer', 'risk_type' => 'integer', 'template' => 'integer', 'status' => 'integer', 'is_use' => 'integer'];
}

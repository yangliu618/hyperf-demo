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
 * @property int $u_id
 * @property int $risk_agent_config_id
 * @property int $risk_type
 * @property int $is_del
 * @property string $update_time
 * @property string $create_time
 */
class TblRiskAgentDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_agent_detail';

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
    protected $casts = ['id' => 'integer', 'u_id' => 'integer', 'risk_agent_config_id' => 'integer', 'risk_type' => 'integer', 'is_del' => 'integer'];
}

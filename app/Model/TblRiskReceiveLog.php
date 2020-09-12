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
 * @property string $type
 * @property int $user_id
 * @property int $bet_id
 * @property int $is_live
 * @property int $combinations
 * @property float $bet_amount
 * @property string $odds
 * @property float $gain
 * @property string $data_create_date
 * @property string $json_data
 * @property string $remark
 * @property int $status
 * @property string $create_time
 * @property string $update_time
 */
class TblRiskReceiveLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_receive_log';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'bet_id' => 'integer', 'is_live' => 'integer', 'combinations' => 'integer', 'bet_amount' => 'float', 'gain' => 'float', 'status' => 'integer'];
}

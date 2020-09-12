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
 * @property int $first_user
 * @property string $first_user_name
 * @property int $second_user
 * @property string $second_user_name
 * @property int $tag_id
 * @property string $tag
 * @property int $status
 * @property int $flag
 * @property string $remake
 * @property string $relationship_time
 * @property string $cancel_time
 * @property string $create_time
 * @property string $update_time
 */
class TblRiskAccount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_risk_account';

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
    protected $casts = ['id' => 'integer', 'first_user' => 'integer', 'second_user' => 'integer', 'tag_id' => 'integer', 'status' => 'integer', 'flag' => 'integer'];
}

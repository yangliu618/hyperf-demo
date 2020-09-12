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
 * @property string $file
 * @property string $class
 * @property string $fun
 * @property string $params
 * @property string $note
 * @property string $err_info
 * @property int $retry_time
 * @property int $retry_result
 * @property int $add_time
 * @property int $update_time
 */
class TblErrorList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_error_list';

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
    protected $casts = ['id' => 'integer', 'retry_time' => 'integer', 'retry_result' => 'integer', 'add_time' => 'integer', 'update_time' => 'integer'];
}

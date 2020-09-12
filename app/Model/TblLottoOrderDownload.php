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
 * @property string $record_day
 * @property string $file_name
 * @property int $is_download
 * @property int $is_process
 * @property int $cancel_is_download
 * @property int $cancel_is_process
 * @property string $update_time
 * @property string $create_time
 */
class TblLottoOrderDownload extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_lotto_order_download';

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
    protected $casts = ['id' => 'integer', 'is_download' => 'integer', 'is_process' => 'integer', 'cancel_is_download' => 'integer', 'cancel_is_process' => 'integer'];
}

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
 * @property int $display_pos
 * @property string $type
 * @property string $content
 * @property string $link
 * @property int $language_code
 * @property string $language_name
 * @property string $start_time
 * @property string $end_time
 * @property int $state
 * @property string $update_time
 * @property string $create_time
 */
class TblMarquee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_marquees';

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
    protected $casts = ['id' => 'integer', 'display_pos' => 'integer', 'language_code' => 'integer', 'state' => 'integer'];
}

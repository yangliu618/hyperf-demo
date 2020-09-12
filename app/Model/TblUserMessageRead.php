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
 * @property int $user_id
 * @property int $message_id
 * @property int $message_type
 * @property string $title
 * @property string $content
 * @property int $is_read
 * @property int $is_delete
 * @property string $send_time
 * @property string $create_time
 * @property string $update_time
 */
class TblUserMessageRead extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_user_message_read';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'message_id' => 'integer', 'message_type' => 'integer', 'is_read' => 'integer', 'is_delete' => 'integer'];
}

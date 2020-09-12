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
 * @property int $msg_type
 * @property int $msg_status
 * @property string $to_userid_list
 * @property string $to_groupid_list
 * @property int $voice_id
 * @property int $relation_id
 * @property int $relation_type
 * @property int $submit_person
 * @property string $submit_person_name
 * @property string $submit_ip
 * @property int $submit_time
 * @property int $add_time
 * @property int $update_time
 * @property int $relay_person
 * @property string $relay_person_name
 * @property string $msg_title
 * @property string $submit_message
 * @property string $param
 */
class TblMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_message';

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
    protected $casts = ['id' => 'integer', 'msg_type' => 'integer', 'msg_status' => 'integer', 'voice_id' => 'integer', 'relation_id' => 'integer', 'relation_type' => 'integer', 'submit_person' => 'integer', 'submit_time' => 'integer', 'add_time' => 'integer', 'update_time' => 'integer', 'relay_person' => 'integer'];
}

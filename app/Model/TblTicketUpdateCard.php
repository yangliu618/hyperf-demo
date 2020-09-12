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
 * @property string $ticket_id
 * @property int $user_id
 * @property string $user_name
 * @property string $real_name
 * @property string $open_bank
 * @property string $open_bank_id
 * @property string $old_bank_account
 * @property string $new_bank_account
 * @property int $account_type
 * @property string $province
 * @property string $city
 * @property string $province_id
 * @property string $city_id
 * @property string $branch
 * @property int $is_default
 * @property string $old_bank_info
 * @property string $create_time
 * @property string $update_time
 */
class TblTicketUpdateCard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_ticket_update_card';

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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'account_type' => 'integer', 'is_default' => 'integer'];
}

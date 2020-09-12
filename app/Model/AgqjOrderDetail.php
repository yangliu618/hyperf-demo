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
 * @property string $gmcode
 * @property string $begintime
 * @property string $closetime
 * @property string $stopbettime
 * @property string $dealer
 * @property string $gametype
 * @property string $shoecode
 * @property string $bankerpoint
 * @property string $playerpoint
 * @property string $cardnum
 * @property string $pair
 * @property string $dragonpoint
 * @property string $tigerpoint
 * @property string $cardlist
 * @property string $dragonres
 * @property string $phoenixres
 * @property string $vid
 * @property string $last_update_time
 */
class AgqjOrderDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agqj_order_detail';

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
    protected $casts = ['id' => 'integer'];
}

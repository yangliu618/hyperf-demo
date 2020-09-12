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
 * @property string $daytime
 * @property int $total_reg_user
 * @property int $newadd_reg_user
 * @property int $total_cashin_user
 * @property int $newadd_cashin_user
 * @property int $cashin_user
 * @property int $cashin
 * @property int $total_cashout_user
 * @property int $newadd_cashout_user
 * @property int $cashout_user
 * @property int $cashout
 * @property int $total_bet_user
 * @property int $bet_user
 * @property int $newadd_bet_user
 * @property string $arup
 * @property string $au
 * @property int $walletAmount
 * @property int $freezeWalletAmount
 * @property string $walletDetail
 * @property string $add_time
 */
class TblUserBasic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_user_basic';

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
    protected $casts = ['id' => 'integer', 'total_reg_user' => 'integer', 'newadd_reg_user' => 'integer', 'total_cashin_user' => 'integer', 'newadd_cashin_user' => 'integer', 'cashin_user' => 'integer', 'cashin' => 'integer', 'total_cashout_user' => 'integer', 'newadd_cashout_user' => 'integer', 'cashout_user' => 'integer', 'cashout' => 'integer', 'total_bet_user' => 'integer', 'bet_user' => 'integer', 'newadd_bet_user' => 'integer', 'walletAmount' => 'integer', 'freezeWalletAmount' => 'integer'];
}

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
 * @property string $title
 * @property string $synopsis
 * @property int $associate_activity
 * @property string $release_time
 * @property string $release_author
 * @property string $cover_img_url
 * @property string $detail_img_url
 * @property string $content
 * @property int $sort
 * @property int $is_show
 * @property int $status
 * @property string $platform
 * @property string $website
 * @property int $language_id
 * @property string $language_name
 * @property int $in_ad
 * @property int $recommend
 * @property int $in_expired
 * @property string $create_time
 * @property string $update_time
 */
class TblPreferentialActivity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_preferential_activity';

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
    protected $casts = ['id' => 'integer', 'associate_activity' => 'integer', 'sort' => 'integer', 'is_show' => 'integer', 'status' => 'integer', 'language_id' => 'integer', 'in_ad' => 'integer', 'recommend' => 'integer', 'in_expired' => 'integer'];
}

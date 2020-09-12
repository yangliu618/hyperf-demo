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
namespace App\Event;

class UserRegistered
{
    public $user_id;

    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }
}

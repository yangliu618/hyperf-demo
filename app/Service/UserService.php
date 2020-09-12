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
namespace App\Service;

use App\Event\BeforeUserRegistered;
use App\Event\UserRegistered;
use Hyperf\Di\Annotation\Inject;
use Psr\EventDispatcher\EventDispatcherInterface;

class UserService
{
    /**
     * @Inject
     * @var EventDispatcherInterface
     */
    public $eventDispatcher;

    public function getUserName()
    {
        return 'jack';
    }

    public function calNum($a, $b)
    {
        return bcmul($a, $b);
    }

    public function register()
    {
        $beforeReg = new BeforeUserRegistered();
        $this->eventDispatcher->dispatch($beforeReg);
        if ($beforeReg->canReg) {
            $user_id = rand(10000, 99999);
        } else {
            return 'Sorry, Cant reg now!';
        }

        $this->eventDispatcher->dispatch(new UserRegistered($user_id));
        return $user_id;
    }
}

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
namespace App\Controller;

use Hyperf\Config\Annotation\Value;
use Hyperf\Config\Config;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController
 */
class TestController extends AbstractController
{
    /**
     * @Value("redis")
     */
    private $configValue;

    public function index()
    {
        return $this->configValue;
    }
}

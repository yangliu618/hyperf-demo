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
namespace App\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as HyperfCommand;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Input\InputArgument;

/**
 * @Command
 */
class FooCommand extends HyperfCommand
{
    /**
     * 执行的命令行.
     *
     * @var string
     */
    protected $name = 'foo:hello';

    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('foo:hello');
    }

    public function configure()
    {
        parent::configure();
        $this->setDescription('Hyperf Demo Command');
        $this->setHelp('Hyperf 自定义命令演示，使用帮助文件写这里');
        $this->addUsage('firstParam secondParam');
    }

    public function handle()
    {
        // 从 $input 获取 name 参数
        $argument = $this->input->getArgument('name') ?? 'World';
        $secondParam = $this->input->getArgument('secondParam') ?? 'second';
        $this->line('Hello ' . $argument . ' ' . $secondParam, 'info');
        //$this->line('Hello Hyperf!', 'info');
    }

    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, '这里是对这个参数的解释'],
            ['secondParam', InputArgument::OPTIONAL, '这里是对这个参数的解释'],
        ];
    }
}

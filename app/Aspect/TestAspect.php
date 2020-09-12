<?php


namespace App\Aspect;


use App\Annotation\Foo;
use App\Controller\IndexController;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

/**
 * @Aspect()
 */
class TestAspect extends AbstractAspect
{
    public $classes = [
        //IndexController::class,  //类下所有方法都会切入
        IndexController::class . '::' . 'aspect', //只有aspect这个方法会切入
    ];

    public $annotations = [
        //Foo::class,  //所以Foo注解的都会切入
    ];

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        $result = 'classAspectBefore ';
        $result .= $proceedingJoinPoint->process(); //方法切入
        $result .= ' afterClassAspect';

        /**
         * @var Foo $annotationFoo 注解切入
         */
        $annotationFoo = $proceedingJoinPoint->getAnnotationMetadata()->class[Foo::class];
        $result .= ' ||| '. $annotationFoo->bar;

        return $result;
    }
}
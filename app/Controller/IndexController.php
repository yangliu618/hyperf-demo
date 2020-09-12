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

use App\Aspect\TestAspect;
use App\Service\UserService;
use Hyperf\Config\Annotation\Value;
use Hyperf\Config\Config;
use Hyperf\Config\ConfigFactory;
use Hyperf\Contract\ConfigInterface;
use Hyperf\DbConnection\Db;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Paginator\Paginator;
use Hyperf\Redis\Redis;
use Hyperf\Utils\Collection;
use Hyperf\Utils\Context;
use Hyperf\Utils\Coroutine;
use Hyperf\Utils\Exception\ParallelExecutionException;
use Hyperf\Utils\Parallel;
use App\Annotation\Foo;

/**
 * @AutoController
 * @Foo(bar="AnnotationAspect")
 */
class IndexController extends AbstractController
{
    /**
     * @Inject
     * @var Redis
     */
    public $redis;

    public static $num = 5;

    /**
     * @Inject
     * @var UserService
     */
    private $user;

    /**
     * @Value("redis.default.auth")
     */
    private $configValue;

    /**
     * @Inject
     * @var ConfigInterface
     */
    private $config;

    //http://127.0.0.1:9502/index/index?a=b&name=jack&arr[0][name]=hello&arr[1][name]=world&arr[2][name]=php
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",

            //如果传输表单数据中包含「数组」形式的数据，那么可以使用「点」语法来获取数组：
            'arr' => $this->request->input('arr.0.name', 'arrName'),
            'arrName' => $this->request->input('arr.*.name', 'arrName'),
            'query' => $this->request->query('name'),
            'path' => $this->request->getPathInfo(),
            'getRequestUri' => $this->request->getRequestUri(),
            'url' => $this->request->url(),
            'all' => $this->request->all(),
            'getQueryString' => $this->request->getQueryString(),
            'getQueryParams' => $this->request->getQueryParams(),
            //'getHeaders' => $this->request->getHeaders(),
            'fullUrl' => $this->request->fullUrl(),
            'cookie' => $this->request->getCookieParams(),
        ];
    }

    // {"user":{"title":"kophp","name":"jack","sex":"tim"}}
    public function json()
    {
        $this->request->cookie('cookies.username', 'jack');
        return [
            'json' => $this->request->input('user.name'),
            'getCookieParams' => $this->request->getCookieParams(),
            'all' => $this->request->all(),
        ];
    }

    public function user()
    {
        $a = $this->request->input('a', 0);
        $b = $this->request->input('b', 0);
        $this->request->fullUrl();
        return [
            'jack' => 'a',
            'getUsername' => $this->user->getUserName(),
            'calNum' => $this->user->calNum($a, $b),
            'id' => $this->request->input('id'),
        ];
    }

    public function test()
    {
        return 'hello world:' . time();
    }

    public function co()
    {
        $parallel = new Parallel(60);
        for ($i = 0; $i < 50; ++$i) {
            $parallel->add(function () {
                sleep(1);
                return Coroutine::id();
            });
        }

        try {
            return $parallel->wait();
        } catch (ParallelExecutionException $e) {
            // $e->getResults() 获取协程中的返回值。
            // $e->getThrowables() 获取协程中出现的异常。
        }
    }

    public function context()
    {
        $name = Context::get('name', 'jack');
        var_export($name);
        return Context::set('name', 'yangliu');
    }

    public function redis()
    {
        return $this->redis->get('name');
    }

    public function db()
    {
        //$users = Db::connection('default')->select('SELECT * FROM tbl_user limit 5');
        return Db::table('tbl_user')->first();
    }

    public function glo()
    {
        return [
            'inCoroutine' => Coroutine::inCoroutine(),
            'coroutineId' => Coroutine::id(),
            '$_GET' => $_GET,
            '$_POST' => $_POST,
            '$_SERVER' => $_SERVER,
            '$_SESSION' => $_SESSION,
            '$_COOKIE' => $_COOKIE,
            '$_REQUEST' => $_REQUEST,
            '$_ENV' => $_ENV,
        ];
    }

    public function info()
    {
        ob_start();                              // Capturing
        phpinfo();                               // phpinfo ()
        return trim(ob_get_clean());           // output
    }

    public function conf()
    {
        //$config = new Config();
        $config = new ConfigFactory();
        return [
            '1、通过config获取' => config('databases.default.driver'),
            '2、通过config获取' => config('databases.default.pool'),
            '3、通过ConfigInterface获取' => $this->config->get('redis'),
            '4、通过Value获取' => $this->configValue,
            '5、app_name' => $this->config->get('app_name'),
        ];
    }

    public function file()
    {
        $file = $this->request->file('uploadFile');
        return [
            'getMimeType' => $file->getMimeType(),
            'file' => $file->toArray(),
            'getClientFilename' => $file->getClientFilename(),
            'isValid' => $file->isValid(),
            'extName' => $file->getExtension(),
            'path' => $file->getPath(),
            'moveTo' => $file->moveTo('/tmp/new.md'), //可以放共享存储或cdn上
        ];
    }

    //返回xml格式的数据
    public function resXml()
    {
        $data = [
            'key' => 'value',
            'key1' => 'value1',
            'key2' => 'value2',
            'key3' => 'value3',
        ];
        return $this->response->xml($data);
    }

    public function resRaw()
    {
        $data = 'hello world;';
        //return $data;
        return $this->response->raw($data);
    }

    public function redirect()
    {
        return $this->response->redirect('http://127.0.0.1:9501/index/index');
    }

    public function exception()
    {
        try {
            $a = [];
            var_dump($a[1]);
        } catch (\Throwable $throwable) {
            var_dump(get_class($throwable), $throwable->getMessage());
        }
    }

//    public function redisCache(){
//        $users = Db::table('tbl_user')->first();
//        return $users;
//    }

    //http://127.0.0.1:9501/index/page?page=2 分页
    public function page()
    {
        $currentPage = (int) $this->request->input('page', 1);
        $perPage = (int) $this->request->input('per_page', 2);
        // 这里根据 $currentPage 和 $perPage 进行数据查询，以下使用 Collection 代替
        $collection = new Collection([
            ['id' => 1, 'name' => 'Tom'],
            ['id' => 2, 'name' => 'Sam'],
            ['id' => 3, 'name' => 'Tim'],
            ['id' => 4, 'name' => 'Joe'],
        ]);

        $users = array_values($collection->forPage($currentPage, $perPage)->toArray());

        $paginator = new Paginator($users, $perPage, $currentPage);
        return [
            'paginator' => $paginator,
            'total_page' => $paginator->count(),
            'cur_page' => $paginator->currentPage(),
            'total_num' => $collection->count(),
        ];
    }

    public function static_var()
    {
        return static::$num++;
    }

    /**
     * @return string
     * @see TestAspect
     */
    public function aspect()
    {
        return 'Test aspect!';
    }
}

<?php


namespace App\Controller;

use App\Amqp\Producer\DemoProducer;
use Hyperf\Amqp\Consumer;
use Hyperf\Amqp\Producer;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 */
class AmqpController extends AbstractController
{

    /**
     * curl 'http://127.0.0.1:9501/amqp/index?msg=168587866'
     * @return string
     */
    public function index()
    {
        //$str_msg = $this->request->input('msg','amqpTest '.date('Y-m-d H:i:s'));
        $id = $this->request->input('id',168587866);
        $producer = $this->container->get(Producer::class);
        $obj = new DemoProducer($id);
        var_dump('111111');
        $result = $producer->produce($obj);
        var_dump('22222');
        return $result . '|'. $obj->payload();
    }


    public function consumer()
    {
        $consumer = $this->container->get(Consumer::class);
        $consumer->consumer();
    }
}
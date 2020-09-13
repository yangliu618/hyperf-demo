<?php

declare(strict_types=1);

namespace App\Amqp\Producer;

use Hyperf\Amqp\Annotation\Producer;
use Hyperf\Amqp\Message\ProducerMessage;
use Hyperf\DbConnection\Db;

/**
 * @Producer(exchange="hyperf", routingKey="hyperf")
 */
class DemoProducer extends ProducerMessage
{
    public function __construct(int $id)
    {
        $data = Db::connection()->selectOne('select * from tbl_user where id=:id', ['id' => $id]);
        $this->payload = $data;
    }

    /*public function getUserById($id)
    {
        $data = Db::connection()->selectOne('select * from tbl_user where id=:id', ['id' => $id]);
        $this->payload = $data;
    }*/
}

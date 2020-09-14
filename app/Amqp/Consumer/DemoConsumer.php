<?php

declare(strict_types=1);

namespace App\Amqp\Consumer;

use Hyperf\Amqp\Result;
use Hyperf\Amqp\Annotation\Consumer;
use Hyperf\Amqp\Message\ConsumerMessage;
use PhpAmqpLib\Message\AMQPMessage;

/**
 * @Consumer(exchange="hyperf", routingKey="hyperf", queue="hyperf", name ="DemoConsumer", nums=1)
 */
class DemoConsumer extends ConsumerMessage
{
    public function consume($data): string
    {
        print_r($data);
        return Result::ACK;
    }

   /* public function isEnable(): bool
    {
        return true; //设置为false，则不会在收到消息时自动消费
    }*/

    /*public function consumeMessage($data, AMQPMessage $message): string
    {
        $data['message'] .= 'Reply:' . $data['message'];

        $this->reply($data, $message);

        return Result::ACK;
    }*/
}

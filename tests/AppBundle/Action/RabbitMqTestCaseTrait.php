<?php

namespace Tests\AppBundle\Action;

use OldSound\RabbitMqBundle\RabbitMq\Consumer;
use OldSound\RabbitMqBundle\RabbitMq\Producer;
use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Exception\AMQPTimeoutException;
use PhpAmqpLib\Message\AMQPMessage;

trait RabbitMqTestCaseTrait
{
    use ClassUtilsTrait;
    use ArrayPathTrait;

    /** @var AMQPChannel */
    protected $channel;

    /** @var array */
    private $messages = [];

    abstract public function getContainer();

    public function setupRabbitMqTestCaseTrait()
    {
        $this->channel = $this->getContainer()->get('old_sound_rabbit_mq.connection.default')->channel();

        if ($producers = $this->getMethodAnnotationValue('rabbitMqProducer')) {
            /** @var AMQPChannel $channel */

            foreach ($producers as $producerName) {
                /** @var Producer $producer */
                $producer = $this->getContainer()->get(sprintf('old_sound_rabbit_mq.%s_producer', $producerName));
                $producer->setupFabric();

                $queueName = $this->getPrivateProperty($producer, 'queueOptions')['name'];
                $exchangeName = $this->getPrivateProperty($producer, 'exchangeOptions')['name'];

                // create debug queue to fetch messages from, that bound to same exchange as original queue
                $debugQueueName = $this->getDebugQueueName($queueName);
                $this->channel->queue_declare($debugQueueName);
                $this->channel->queue_bind($debugQueueName, $exchangeName);

                // purge queues
                $this->channel->queue_purge($queueName);
                $this->channel->queue_purge($debugQueueName);
            }
        }
    }

    /**
     * @param $queue
     * @param $index
     * @return AMQPMessage
     */
    public function getRabbitMqMessage($queue, $index)
    {
        $this->loadMessages($queue);

        if (!isset($this->messages[$queue][$index])) {
            $this->fail(sprintf('queue with name "%s" doen\'t has message with index %d', $queue, $index));
        }

        return $this->messages[$queue][$index];
    }

    public function getRMQMJsonMessageParam($queue, $index, $path)
    {
        $message = $this->getRabbitMqMessage($queue, $index);
        $data = json_decode($message->getBody(), true);

        return $this->getPath($data, $path);
    }

    public function consumeRMQMessages($consumerName, $messageCount)
    {
        /** @var Consumer $consumer */
        $consumer = $this->container->get(sprintf('old_sound_rabbit_mq.%s_consumer', $consumerName));
        $consumer->setIdleTimeout(0.001);

        try {
            $consumer->consume($messageCount);
        } catch (AMQPTimeoutException $exception) {
            $actualMessageCount = $this->getPrivateProperty($consumer, 'consumed');
            $this->fail(sprintf(
                'consumer "%s" received wrong count of messages %d (expected %d)',
                $consumerName,
                $actualMessageCount,
                $messageCount
            ));
        }
    }

    private function loadMessages($queue)
    {
        if (!isset($this->messages[$queue])) {
            $this->messages[$queue] = [];

            while ($message = $this->channel->basic_get($this->getDebugQueueName($queue))) {
                $this->messages[$queue][] = $message;
            }
        }
    }

    private function getDebugQueueName($name)
    {
        return $name.'__debug';
    }
}

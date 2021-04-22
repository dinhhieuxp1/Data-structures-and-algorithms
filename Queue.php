<?php

declare(strict_types=1);

namespace Exercises\Queue;

/**
 * Create a Queue.
 *
 * When queue is empty remove and peek methods should return null.
 *
 * @property mixed[] $queue
 * @method void add(mixed $value)
 * @method mixed|null remove()
 * @method mixed|null peek()
 * @method static self zip(self $queue1, self $queue2) interweaves two provided queues
 * @example $queue1 = new Queue();
 * $queue1->add(1);
 * $queue1->add(2);
 * $queue1->add(3);
 * $queue1->peek() === 3;
 * $queue1->remove() === 3;
 *
 * $queue2 = new Queue();
 *
 * $queue1->add('a');
 * $queue1->add('b');
 * $queue1->add('c');
 *
 * Queue::zip(queue1, queue2) -> [1, 'a', 2, 'b', 'c']
 */
final class Queue
{
    private $queue=[];

    public function add($value){
       array_unshift( $this->queue,$value);
    }
    public function remove(){
       return array_pop($this->queue);
    }
    public function peek(){
        return count($this->queue)
            ?$this->queue[array_key_last($this->queue)]:null;
    }
    public static function zip(self $queue1, self $queue2): self
    {
        $new = new self();

        while ($queue1->peek() || $queue2->peek()) {
            $value1 = $queue1->remove();
            if ($value1) {
                $new->add($value1);
            }

            $value2 = $queue2->remove();
            if ($value2) {
                $new->add($value2);
            }
        }

        return $new;
    }
}
$queue1 = new Queue();

$queue1->add(1);
$queue1->add(2);
$queue1->add(3);

print_r("Phần tử cuối của mảng".$queue1->peek());//lay phan tu o dau hang doi
echo"\n";
print_r("Phần tử cuối bị xóa của mảng".$queue1->remove());

$queue2 = new Queue();

$queue2->add('a');
$queue2->add('b');
$queue2->add('c');
print_r(Queue::zip($queue1, $queue2));
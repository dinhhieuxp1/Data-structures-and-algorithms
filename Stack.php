<?php

declare(strict_types=1);

namespace Exercises\Stack\Complete;

use function array_key_last;
use function array_pop;
use function count;

final class Stack{
    private $stack=[];

    public  function push($value){
        $this->stack[]=$value;
    }
    public function pop()
    {
            return array_pop($this->stack);
    }
    public function peek()
    {
        return count($this->stack)
            ? $this->stack[array_key_last($this->stack)]
            : null;

    }

}
$num = new Stack();
$num->push(1);
$num->push(2);
print_r($num->pop());
echo "\n";
print_r($num->peek());
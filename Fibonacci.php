<?php

declare(strict_types=1);

namespace Exercises\Fibonacci;

/**
 * The fibonacci series is a series of numbers where
 * each consecutive number is the sum of the previous two.
 * For example [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ∞]
 *
 * @method static int get(int $index)
 * @example Fibonacci::get(7) === 13
 */
final class Fibonacci
{

    public static function get(int $index){
        $num = 0;
        $num1= 1;
        $num_n = 1;

        if ($index < 0) {
            return - 1;
        } else if ($index == 0 || $index == 1) {
            return $index;
        } else {
            for($i = 2; $i < $index; $i ++) {// $i=2 chay tu buoc thu 2
                $num = $num1;//vong dau tien $num=1
                $num1 = $num_n;//vong dau tien $num1=1
                $num_n = $num + $num1;
            }
        }
        return $num_n;


    }
}
print_r(Fibonacci::get(7));
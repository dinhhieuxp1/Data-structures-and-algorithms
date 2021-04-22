<?php

declare(strict_types=1);

/**
 * In các số từ 1 đến n.
 * Khi n chia hết cho 3 echo 'fizz'.
 * Khi n chia hết cho 5 echo 'buzz.
 * Khi n chia hết cho cả 3 và 5 thì echo 'fizzbuzz'.
 *
 * @method static //void print(int $limit)
 * @example FizzBuzz::print('5') -> 1, 2, 'fizz', 4, 'buzz'
 */
final class FizzBuzz
{
    public static function print(int $n): void
    {
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0 ) {

                echo 'fizz';

            } elseif ($i % 5 == 0) {

                echo 'buzz';

            } elseif ($i % 5 == 0 && $i%3==0) {
                echo 'fizzbuzz';
            }
            else {
                // echo 'fizzbuzz';
                echo $i;

            }
        }
    }
}
FizzBuzz::print(15);
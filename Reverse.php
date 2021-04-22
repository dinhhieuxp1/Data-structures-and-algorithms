<?php

declare(strict_types=1);

namespace Exercises\Reverse;
final class Reverse
{
    public static function string(string $string)
    {
        echo strrev($string);
    }
    public static function int(int $int){
        $string=strval($int);
        $rev=strrev($string);
        echo $rev;
    }
    public static function int2(int $int){
        $string=strval(abs($int));// chuyen tri tuyet doi int thanh chuoi
        $rev='-'.strrev($string);//dao nguoc lai
        echo $rev;
    }
}
Reverse::string("ABCD");
echo "\n";
Reverse::int2(-54321);
echo"\n";
Reverse::int(456789);

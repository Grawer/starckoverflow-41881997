<?php

namespace Source;

class MathFunctions
{
    public static function fib($arr, $num)
    {
        for ($i = $num - 3; $i > 0; $i--) {
            $arr[] = array_sum(array_slice($arr, -3));
        }

        return $arr;
    }
}

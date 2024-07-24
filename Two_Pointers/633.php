<?php

/**
 *   Given a non-negative integer c, decide whether there're two integers a and b such that a2 + b2 = c.
 */

class Solution {

    /**
     * @param $c
     * @return Boolean
     */
    function judgeSquareSum($c) {
        $i = 0;
        $j = (int) sqrt($c);

        while($i <= $j) {
            if ( $i * $i + $j * $j == $c ) return true;
            else if ( $i * $i + $j * $j > $c ) $j -= 1;
            else $i += 1;
        }   

        return false;
    }
}
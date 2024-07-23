<?php

class Solution {

    /**
     * @param array $numbers
     * @param Integer $target
     * @return array
     */
    function twoSum($numbers, $target) {
        $i = 0;
        $j = count($numbers) - 1;

        // Make sure $i != $j
        while ( $i < $j ) {
            if ( $numbers[$i] + $numbers[$j] == $target ) return [$i+1, $j+1];

            // Check if current two pointer value larger then the target, then move the larger pointer less 1
            else if ( $numbers[$i] + $numbers[$j] > $target ) $j -= 1;

            // Check if current two pointer value smaller then the target, then move the smaller pointer plus 1
            else $i += 1;
        }
    }
}

?>
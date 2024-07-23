<?php

/**
    Given a 1-indexed array of integers numbers that is already sorted in non-decreasing order, find two numbers such that they add up to a specific target number. 
    Let these two numbers be numbers[index1] and numbers[index2] where 1 <= index1 < index2 <= numbers.length.
    Return the indices of the two numbers, index1 and index2, added by one as an integer array [index1, index2] of length 2.
 */

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
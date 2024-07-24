<?php

/**
 *   Given a string s, reverse only all the vowels in the string and return it.
 *   The vowels are 'a', 'e', 'i', 'o', and 'u', and they can appear in both lower and upper cases, more than once.
 */

 class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowelsArray = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U']; 
        $i = 0;
        $j = count(str_split($s)) - 1;

        while($i < $j) {
            if ( !in_array($s[$i], $vowelsArray) ) $i += 1;
            else if ( !in_array($s[$j], $vowelsArray) ) $j -= 1;
            else {
                $temp = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $temp;
                $i += 1;
                $j -= 1;
            }
        }  

        return $s;
    }
}
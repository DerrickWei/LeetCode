<?php

/**
 *   Given a string s and a string array dictionary, return the longest string in the dictionary that can be formed by deleting some of the given string characters. 
 *   If there is more than one possible result, return the longest word with the smallest lexicographical order. If there is no possible result, return the empty string.
 */

class Solution {

    /**
     * @param String $s
     * @param String[] $dictionary
     * @return String
     */
    function findLongestWord($s, $dictionary) {
        $longestWord = '';

        $i = $j = 0;
        foreach ( $dictionary as $word ) {
            if (
                ( strlen($word) < strlen($longestWord) )
                || (
                    ( strlen($word) == strlen($longestWord) )
                    && ( strcmp($word, $longestWord) >= 0 )
                )
            ) continue;

            if ( $this->_checkIfSubString($s, $word) ) $longestWord = $word;  
        }

        return $longestWord;
    }

    private function _checkIfSubString($sub, $word) {
        $i = $j = 0;
        while ( $i < strlen($sub) && $j < strlen($word) ) {
            if ( $sub[$i++] == $word[$j] ) $j += 1;
        }

        return $j == strlen($word);
    }
}
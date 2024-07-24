<?php

/**
 *   Given a string s, return true if the s can be palindrome after deleting at most one character from it.
 */

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function validPalindrome($s) {
        $sArray = str_split($s);

        for ( $i = 0, $j = count($sArray) - 1; $i < $j; $i++, $j-- ) {
            if ( $sArray[$i] != $sArray[$j] ) {
                return (
                    ( $this->_checkIfPalindrome($s, $i+1, $j) )
                    || ( $this->_checkIfPalindrome($s, $i, $j-1) )
                );
            }
        }

        return true;
    }

    private function _checkIfPalindrome($string, $i, $j) {
        while($i < $j) {
            if ( $string[$i++] != $string[$j--] ) return false;
        }  

        return true;
    }
}
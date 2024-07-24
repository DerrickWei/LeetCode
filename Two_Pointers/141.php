<?php

/**
 *   Given head, the head of a linked list, determine if the linked list has a cycle in it.
 *   There is a cycle in a linked list if there is some node in the list that can be reached again by continuously following the next pointer. 
 *   Internally, pos is used to denote the index of the node that tail's next pointer is connected to. Note that pos is not passed as a parameter.
 *   Return true if there is a cycle in the linked list. Otherwise, return false.
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        if ( $head == null ) return false;

        $i = $head; $j = $head->next;
        while ( $i !== null && $j !== null && $j->next !== null ) {
            if ( $i === $j ) return true;

            $i = $i->next;
            $j = $j->next->next;
        }    

        return false;
    }
}
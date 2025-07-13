<?php
require_once 'ListNode.php'; 

class AddTwo {
    function addTwoNumbers(array $l1, array $l2) {
        $dummy = new ListNode(0);
        $ll1 = $dummy->buildList($l1);
        $ll2 = $dummy->buildList($l2);

        $current = $dummy;
        $carry = 0;

        while ($ll1 !== null || $ll2 !== null || $carry > 0) {
            $val1 = $ll1 !== null ? $ll1->val : 0;
            $val2 = $ll2 !== null ? $ll2->val : 0;

            $sum = $val1 + $val2 + $carry;
            $carry = intdiv($sum, 10); // integer division
            $digit = $sum % 10;

            $current->next = new ListNode($digit);
            $current = $current->next;

            if ($ll1 !== null) $ll1 = $ll1->next;
            if ($ll2 !== null) $ll2 = $ll2->next;
        }

        return $dummy->next;
    }
}

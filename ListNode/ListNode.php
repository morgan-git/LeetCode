class Solution {
    function addTwoNumbers($l1, $l2) {
        $dummy = new ListNode(0);
        $current = $dummy;
        $carry = 0;

        while ($l1 !== null || $l2 !== null || $carry > 0) {
            $val1 = $l1 !== null ? $l1->val : 0;
            $val2 = $l2 !== null ? $l2->val : 0;

            $sum = $val1 + $val2 + $carry;
            $carry = intdiv($sum, 10); // integer division
            $digit = $sum % 10;

            $current->next = new ListNode($digit);
            $current = $current->next;

            if ($l1 !== null) $l1 = $l1->next;
            if ($l2 !== null) $l2 = $l2->next;
        }

        return $dummy->next;
    }
}

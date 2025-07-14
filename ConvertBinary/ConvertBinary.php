<?php 


class ConvertBinary {
    /**
     * @param ListNode $head
     * @return int
     */
    public function getDecimalValue($head) {
        $num = 0;
        
        while ($head !== null) {
            $num = ($num << 1) | $head->val; // Left shift and add current bit
            $head = $head->next;
        }
        
        return $num;
    }
}

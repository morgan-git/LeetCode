<?php

class ListNode {
    public $val;
    public $next;

    public function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }

    public function buildList(array $values) {
        $dummy = new ListNode();
        $current = $dummy;
        
        foreach ($values as $val) {
            $current->next = new ListNode($val);
            $current = $current->next;
        }
        return $dummy->next;
    }

    public function printList($node) {
        while ($node !== null) {
            echo $node->val . " -> ";
            $node = $node->next;
        }
        echo "null\n";
    }

}

?>

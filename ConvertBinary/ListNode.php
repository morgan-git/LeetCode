<?php

class ListNode {
    public $val = 0;
    public $next = null;
    
    public function __construct(int $val = 0, $next = null) {
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
}
<?php
class Solution {
    /**
     * @param Integer $k
     * @param Integer[] $operations
     * @return String
     */
    public function kthCharacter($k, $operations) {
        $shift = 0;
        $n = count($operations);
        $max_i = min($n - 1, 46);
        
        for ($i = $max_i; $i >= 0; $i--) {
            $half = 1 << $i;
            if ($k > $half) {
                $k -= $half;
                if ($operations[$i] == 1) {
                    $shift++;
                }
            }
        }
        
        return chr(ord('a') + ($shift % 26));
    }
}
<?php 
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function countSpecialIntegers($nums) {
        $compressed = [];
        foreach ($nums as $num) {
            if (empty($compressed) || end($compressed) !== $num) {
                $compressed[] = $num;
            }
        }
        
        $counts = array_count_values($compressed);
        $ans = 0;
        foreach ($counts as $count) {
            if ($count === 1) {
                $ans++;
            }
        }
        
        return $ans;
    }
}
<?php 
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $sum
     * @return Integer
     */
    public function minOperations($nums, $sum) {
        $inf = 1e9;
        $f = array_fill(0, $sum + 1, $inf);
        $f[0] = 0;
        
        foreach ($nums as $x) {
            for ($w = $sum; $w >= 0; $w--) {
                $i = 0;
                $y = $x;
                while ($y <= $w) {
                    $f[$w] = min($f[$w], $f[$w - $y] + $i);
                    $i++;
                    $y <<= 1;
                }
                
                $i = 1;
                $y = intdiv($x, 2);
                while ($y > 0) {
                    if ($y <= $w) {
                        $f[$w] = min($f[$w], $f[$w - $y] + $i);
                    }
                    $i++;
                    $y = intdiv($y, 2);
                }
            }
        }
        
        return $f[$sum] >= $inf ? -1 : $f[$sum];
    }
}
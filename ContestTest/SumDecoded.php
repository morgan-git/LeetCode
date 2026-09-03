<?php 
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function sumDecoded($nums) {
        return $this->sumOfDecodedNumbers($nums);
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function sumOfDecodedNumbers($nums) {
        $MOD = 1000000007;
        $totalSum = 0;
        
        foreach ($nums as $val) {
            $s = sprintf('%.0f', $val);
            $width = (int)substr($s, -1);
            $d_str = substr($s, 0, -1);
            
            $x = (int)substr($d_str, 0, $width);
            $y = (int)substr($d_str, $width);
            
            $term = $this->power($x, $y, $MOD);
            $totalSum = ($totalSum + $term) % $MOD;
        }
        
        return $totalSum;
    }
    
    private function power($base, $exp, $mod) {
        $res = 1;
        $base = $base % $mod;
        while ($exp > 0) {
            if ($exp % 2 == 1) {
                $res = ($res * $base) % $mod;
            }
            $base = ($base * $base) % $mod;
            $exp = intdiv($exp, 2);
        }
        return $res;
    }
}
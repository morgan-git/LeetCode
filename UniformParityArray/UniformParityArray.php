<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @return Boolean
     */
    function canMakeSameParity(array $nums1): bool
    {
        $min = min($nums1);

        // All even -> leave everything unchanged.
        // Otherwise, minimum must be odd so it can serve as
        //the smaller odd number for every larger even number.
        return $min % 2 !== 0 || count(array_filter($nums1, fn($n) => $n % 2 !== 0)) === 0;
    }
}

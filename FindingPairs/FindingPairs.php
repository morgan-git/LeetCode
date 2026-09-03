<?php

class FindingPairs
{
    private array $nums1;
    private array $nums2;
    private array $freq = [];

    public function __construct(array $nums1, array $nums2)
    {
        $this->nums1 = $nums1;
        $this->nums2 = $nums2;

        foreach ($nums2 as $num) {
            $this->freq[$num] = ($this->freq[$num] ?? 0) + 1;
        }
    }

    public function add(int $index, int $val): void
    {
        $oldValue = $this->nums2[$index];
        $newValue = $oldValue + $val;

        // Remove the old value from the frequency map.
        $this->freq[$oldValue]--;

        // Add the new value.
        $this->freq[$newValue] = ($this->freq[$newValue] ?? 0) + 1;

        // Update nums2.
        $this->nums2[$index] = $newValue;
    }

    public function count(int $tot): int
    {
        $count = 0;

        foreach ($this->nums1 as $num) {
            $needed = $tot - $num;

            $count += $this->freq[$needed] ?? 0;
        }

        return $count;
    }
}
<?php
function lengthOfLongestSubstring(string $s): int {
    // Imagine a backpack where we keep track of where we last saw each letter
    $charIndexMap = [];

    // This will hold the biggest number of letters we’ve seen in a row without any repeats
    $maxLength = 0;

    // This marks where our current "window" or group of letters starts
    $start = 0;

    // Count how many letters are in the string
    $len = strlen($s);

    // Go through each letter in the string, one at a time
    for ($end = 0; $end < $len; $end++) {
        $char = $s[$end]; // Get the current letter

        // If we've seen this letter before *and* it’s inside our current group of letters
        if (isset($charIndexMap[$char]) && $charIndexMap[$char] >= $start) {
            // Move the start to the place just after the last time we saw this letter
            $start = $charIndexMap[$char] + 1;
        }

        // Write down where we just saw this letter
        $charIndexMap[$char] = $end;

        // Update our biggest group size if this one is longer
        $maxLength = max($maxLength, $end - $start + 1);
    }

    // After checking every letter, give back the biggest size we found
    return $maxLength;
}

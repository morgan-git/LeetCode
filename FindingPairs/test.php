<?php 

require_once('FindingPairs.php');

$findSumPairs = new FindingPairs(
    [1, 1, 2, 2, 2, 3],
    [1, 4, 5, 2, 5, 4]
);

$actual = [];

$actual[] = $findSumPairs->count(7);

$findSumPairs->add(3, 2);
$actual[] = $findSumPairs->count(8);
$actual[] = $findSumPairs->count(4);

$findSumPairs->add(0, 1);
$findSumPairs->add(1, 1);
$actual[] = $findSumPairs->count(7);

$expected = [8, 2, 1, 11];

echo "LeetCode 1865 - Finding Pairs With a Certain Sum
";
echo str_repeat("=", 50) . PHP_EOL . PHP_EOL;

echo "Expected: " . json_encode($expected) . PHP_EOL;
echo "Actual:   " . json_encode($actual) . PHP_EOL . PHP_EOL;

if ($actual === $expected) {
    echo "PASS" . PHP_EOL;
    exit(0);
}

echo "FAIL" . PHP_EOL;
exit(1);
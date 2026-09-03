<?php 


require_once("UniformParityArray.php");


$test = new Solution();
$nums1 = [1,4,7]; //should return true/1

echo $test->canMakeSameParity($nums1) ? "true\n" : "false\n";


$nums1 = [2,3]; //should return false/0
echo $test->canMakeSameParity($nums1) ? "true\n" : "false\n";

$nums1 = [4,6]; //should return true/1
echo $test->canMakeSameParity($nums1) ? "true\n" : "false\n";   

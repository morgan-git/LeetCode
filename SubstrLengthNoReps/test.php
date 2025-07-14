<?php 
require_once("SubstrLengthNoReps.php");
$s = "abcabcbb";
$sub_norep = new SubstrLengthNoReps();
$len = $sub_norep->lengthOfLongestSubstring($s);

var_dump($len);
//Expected output: 3
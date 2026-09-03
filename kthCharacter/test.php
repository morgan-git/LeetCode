<?php 

require("KthCharacter.php");

$k = 5;
$operations = [0,0,0];

$kth = new Solution();
$answer = $kth->kthCharacter($k, $operations);

var_dump($answer);
//Expected Output: a

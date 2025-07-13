<?php 

require("KthCharacter.php");

$k = 5;
$operations = [0,0,0];

$kth = new kthCharacter();
$answer = $kth->applyOperations($k, $operations);

var_dump($answer);
//Expected Outout a

<?php 
require_once("ClearDigits.php");

$s = "abc"; //expected outout "abc"
$cd = new ClearDigits();
$answer = $cd->clearDigits($s);

var_dump($answer);






$s = "cb34"; //Expected Output ""
$cd = new ClearDigits();
$answer = $cd->clearDigits($s);

var_dump($answer);

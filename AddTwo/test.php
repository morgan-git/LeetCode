<?php 

require_once("AddTwo.php");

$add_two = new AddTwo();

$answer = $add_two->addTwoNumbers([2,4,3],[5,6,4]);

//var_dump($answer);
$answer->printList($answer);
// Expected Output [7,0,8]
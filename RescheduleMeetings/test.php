<?php 

require_once("RescheduleMeetings.php");


$eventTime = 5;
$k = 1;
$startTime = [1,3];
$endTime = [2,5];

$rm = new RescheduleMeetings();
$max_time = $rm->maxFreeTime($eventTime, $k, $startTime, $endTime);

var_dump($max_time);


//Expected Output 2


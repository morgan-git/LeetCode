<?php 

require_once("MaxMatchingPlayers.php");

$players = [4,7,9];
$trainers = [8,2,5,8];

$mmp = new MaxMatchingPlayers();
$max = $mmp->matchPlayersAndTrainers($players, $trainers);
var_dump($max);


//Expected 2




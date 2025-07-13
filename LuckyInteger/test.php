<?php 
require_once("LuckyInteger.php");

$arr = [2,2,3,4];
$ln = new LuckyInteger();

var_dump($ln->findLucky($arr));



//Expected Output 2
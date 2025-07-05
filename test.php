<?php 
require_once 'LuckyInteger.php'; 

$find_lucky = new LuckyInteger();

$arr = [2,2,3,3,3,5,6,8,4,4,4,4];
$lucky_number = $find_lucky->findLucky($arr);
var_dump($lucky_number);


?>
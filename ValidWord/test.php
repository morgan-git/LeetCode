<?php 
require_once("ValidWord.php");

$vw = new ValidWord();
$word = "234Adas";

var_dump($vw->isValid($word));

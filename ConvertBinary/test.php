<?php 
require_once("ListNode.php");
require_once("ConvertBinary.php");

$ln = new ListNode();
$head = $ln->buildList([1,0,1]);
$cb = new ConvertBinary();
$dec_val = $cb->getDecimalValue($head);

var_dump($dec_val);
//expected output 5
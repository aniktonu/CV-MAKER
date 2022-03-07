<?php
//	Write a program to convert a positive number to a negative one.

$number = readline ("Enter a number : ");
$negative = -abs($number);

echo "The negative value of ".$number." is: ".$negative;

?>
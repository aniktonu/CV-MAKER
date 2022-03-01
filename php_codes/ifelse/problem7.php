<?php
// Write a program to calculate the interest which will you gain after 2 year if you deposited BDT 50000 at a rate of 5% per month?


$deposit = 50000 ;
$rate = 5 ;
$time = 2 ; 
$interest = $deposit * ( 1 + ($rate * $time));

echo " \nThe interest is : ".$interest." you will gain after 2 year if you deposited BDT 50000 at a rate of 5% per month";
?>
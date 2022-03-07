<?php
// Write a program to calculate the interest which will you gain after 2 year if you deposited BDT 50000 at a rate of 5% per month?


$deposit = 50000;
$rate = 5;
$time = 24; 
$interest = (($rate*$deposit)/100)*$time; 

echo "The interest is: ".$interest." that you will gain after 2 year\n";
echo "if you deposited BDT 50000 at a rate of 5% per month";
?>
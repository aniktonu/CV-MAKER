<?php
//Write a program to calculate money you need to pay after 1year if you have borrowed an amount of BDT 100000 at a 13% interest.


$amount = 100000;
$interest = 13;
$time = 12; 
$need2pay = (($interest*$amount)/100)*$time;

echo "You need to pay BDT ".$need2pay." after 1 year\n";
echo "if you have borrowed an amount of BDT 100000 at a 13% interest."
?>
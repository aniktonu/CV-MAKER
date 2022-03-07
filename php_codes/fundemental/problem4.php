<?php
//Write a program to calculate the VAT of given amount.
$amount = readline ("Enter Amount : ");
$vatpercentage =  readline ("Enter the VAT parcentage rate : "); 

$vat = ($amount*$vatpercentage)/100;

echo $vatpercentage." percent VAT of the amount ".$amount." is : ".$vat."\n" ;
?>
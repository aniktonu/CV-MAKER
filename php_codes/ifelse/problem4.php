<?php
//Write a program to calculate the VAT of given amount.
$amount = readline ("\nEnter Amount : \n");
$vatvalue  =  readline ("The VAT rate : "); 

$vat = ($amount / 100) * $vatvalue;

echo "\nThe ".$vatvalue." percent vat of ".$amount." is : ".$vat."\n" ;
?>
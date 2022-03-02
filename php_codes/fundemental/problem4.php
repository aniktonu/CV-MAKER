<?php
//
$amount = readline ("\nEnter Amount : \n");
$vatvalue  =  readline ("The VAT rate : "); //$vatpercentage

$vat = ($amount / 100) * $vatvalue;

echo "\nThe ".$vatvalue." percent vat of ".$amount." is : ".$vat."\n" ;
?>
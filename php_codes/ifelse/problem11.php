<?php
//Write a program to find the minimum number from three given numbers.

/*$num1 = readline ("Enter 1st number: ");
$num2 = readline ("Enter 2nd number: ");
$num3 = readline ("Enter 3rd number: ");

$min = min ($num1,$num2,$num3);
echo "The minumum number is : ".$min;*/

$num1 = readline ("Enter 1st number: ");
$num2 = readline ("Enter 2nd number: ");
$num3 = readline ("Enter 3rd number: ");

if ($num1<$num2 and $num1<$num3){
    echo "Minimum number is: ".$num1;
}
elseif ($num2<$num1 and $num2<$num3){
    echo "Minimum number is: ".$num2;
}
else {
    echo "Minimum number is: ".$num3;
}
?>







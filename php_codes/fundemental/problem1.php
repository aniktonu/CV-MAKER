<?php
//Write a program to interchange the value of two variables, say x and y.
$x = readline ("Enter value of x : ");
$y = readline ("Enter value of y : ");

echo "\nThe number before interchange is :\n" ;
echo "Number x = ".$x.", Number y = ".$y ;

$temp = $x;
$x = $y;
$y = $temp;

echo "\nThe number after interchange is :\n" ;
echo "Number x = ".$x.", Number y = ".$temp ;
?>
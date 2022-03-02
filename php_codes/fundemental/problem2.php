<?php

//Input the dimensions of a rectangle and print area and perimeter.

$length = readline ("\nEnter lenght value : ");
$width = readline ("\nEnter width value : ");

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "\nThe area of the rectangle is : ".$area;
echo "\nThe perimeter of the rectangle is : ".$perimeter;
?>
<?php

//Input the dimensions of a rectangle and print area and perimeter.

$length = readline ("Enter lenght value : ");
$width = readline ("Enter width value : ");

$area = $length*$width;
$perimeter = 2*($length+$width);

echo "The area of the rectangle is : ".$area."\n";
echo "The perimeter of the rectangle is : ".$perimeter;
?>
<?php
/* Input the length of the side of a square, and print its area.  
   Produce an error message if the length is negative. (i.e. validation)*/

$side = readline ("Enter the lenght of the side of a square: ");
$area = $side*$side; ///* Area of Square = Side X Side */
if ($side>=0){
     echo "The area is ".$area;
}
else {
    echo "Error Message : The lenght cant be a negative value";
}
?>
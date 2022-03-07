<?php
//Write a program to find the area and circumference of circle for a given radius.

$radius = readline ("Enter Radis Value : ");
$area = 3.14*($radius*$radius);
$circumference = 2*3.14*$radius; //default value of PI = 3.14

echo "The area of circle for ".$radius." radius is ".$area."\n" ;
echo "The circumference of circle for ".$radius." radius is ".$circumference;
?>
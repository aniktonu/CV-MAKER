
<?php
//Write a program to find a given number is greater than 200 or less than 100 or divisible by 7.

    $number = readline ("Enter a Number : ");

    if ($number > 100 or $number < 250 or $number % 7==0){
    echo "The number is greater than 100 or less than 250 or divisible by 7.";
    }
    else {
    echo "The number is not greater than 100 or less than 250 or divisible by 7.";
    }
?>
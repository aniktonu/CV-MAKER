<?php

//Write a program to find a given number is greater than 100 and less than 250 and divisible by 7. 


    $number = readline ("Enter number : ") ;


    if ($number > 100){
        if ($number <250){
            if ($number % 7 == 0){
                echo "$number is greater than 100 and less than 250 and divisible by 7";
            }
            else {
    echo "The number is greather than 100 and less than 250 but not divisible by 7";
            }
        }
    else {

    echo "The number is greather than 100 but not less than 250";
    }
    }
    else {
    echo "The number is not greather than 100" ;

    }
?>
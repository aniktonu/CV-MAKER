<?php
//Write a program to find a given number is greater than 100 and less than 250 or divisible by 7.

    $number = readline ("Enter a Number : ");

    if ($number>100){
        if ($number<250){
                if ($number%7==0){
                    echo "The condition matched\n";
                    echo "The number is greather than 100 and less tahn 250 or divisible by 7";
                }
                else {
                    echo "The condition matched\n";
                    echo "The number is greather than 100 and less tahn 250 but not divisible by 7";
                }
        }
    }
    elseif ($number<250){
        if ($number%7==0){
            echo "The condition matched\n";
            echo "The number is not greather than 100 but less than 250 and divisible by 7";
            }
        else {
            echo "The condition does not matched\n";
            echo "The number is not greather than 100 but less than 250 and not divisible by 7";
        }
    }
    elseif ($number%7==0) {
        echo "The condition matched\n";
        echo "The number is not greather than 100 and not less than 250 but divisible by 7";
    }
    else {
        echo "The condition does not matched\n";
        echo "The number is not greater than 100 and not less tahn 250 and not  divisible by 7.";
    }
?>
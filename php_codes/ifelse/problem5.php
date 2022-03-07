
<?php
//Write a program to find a given number is greater than 200 or less than 100 or divisible by 7.

    $number = readline ("Enter a Number : ");

    if ($number>200){
        if ($number<100){
            if ($number%7==0){
                echo "The condition matched\n";
                echo "The number is greather than 200 or less than 100 or divisible by 7";
            }
            else {
                echo "The condition matched\n";
                echo "The number is greather than 200 or less than 100 but not divisible by 7";
            }
        }
        elseif ($number%7==0){
            echo "The condition matched\n";
            echo "The number is greather than 200, or less than 100, or divisible by 7";
        }
            else {
                echo "The condition matched\n";
                echo "The number is greather than 200, but not less than 100 and not divisible by 7";
            }
    }
    elseif ($number<100){
        if ($number%7==0){
            echo "The condition matched\n";
            echo "The number is not greather than 200, but is less than 100, or divisible by 7";
        }
        elseif ($number%7==0){
            echo "The condition matched\n";
            echo "The number is not greather than 200, but less than 100, or divisible by 7";
        }
        else {
            echo "The condition matched\n";
            echo "The number is not greather than 200, but less than 100, and not divisible by 7";
        }
    }
    elseif ($number%7==0){
        echo "The condition matched\n";
        echo "The number is not greather than 200 and not less than 100, but divisible by 7";
    }
    else {
        echo "The condition does not matched\n";
        echo "The numebr is not greather than 200 , not less than 100, not divisible by 7";
    }

    ?>
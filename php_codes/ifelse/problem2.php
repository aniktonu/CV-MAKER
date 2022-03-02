<?php
//Input 3 numbers and print either an "all 3 equal" or a "not all equal" message

$number1 = readline ("Enter 1st Number: ");
$number2 = readline ("Enter 2nd Number: ");
$number3 = readline ("Enter 3rd Number: ");


if ($number1 == $number2 and $number1 == $number3){
    echo "all 3 equal";

}
else {
    echo "Not all equal";
}



?>
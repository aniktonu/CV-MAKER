<?php
//If there are 200 examinees in BU admission test and available seat is 25 then how many contestant is there for each seat.

$examinees = 200;
$seat = 25; 
$contestant = $examinees/$seat; 

echo "Number of examinees: ".$examinees."\n";
echo "Number of seats: ".$seat."\n";
echo "So there are  ".$contestant." contestant is for each seat";

?>


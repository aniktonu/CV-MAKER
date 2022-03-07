<?php
//If there are 30 students and available bench is 10 how many students will seat in each bench.

$students = 30;
$bench = 10; 
$studentperbench = $students/$bench;

echo "Number of students: ".$students."\n";
echo "Number of bench: ".$bench."\n";
echo "So ".$studentperbench." students will seat in each bench";

?>
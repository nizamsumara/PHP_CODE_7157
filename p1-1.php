//1.1 Write a PHP program for print Previous semester Result using variables & constants in PHP.


<?php
const UNIVERSITY_NAME = "Marwadi University";
$Semester = "4 semester";
$Student_Name = "Nizam Sumara";

$DBMS = 85;
$JAVA = 92;
$R_PROG = 78;
$PYTHON = 80;
$PHP = 90;

$total = $DBMS + $JAVA + $R_PROG + $PYTHON + $PHP;
$percentage = ($total / 500) * 100;

echo "<h2>Result for " .$Semester. "</h2>";
echo "Student: " . $Student_Name. "<br>";
echo "Marks: $DBMS, $JAVA, $R_PROG, $PYTHON, $PHP <br>";
echo "Total: $total / 500 <br>";
echo "Percentage: " . number_format($percentage, 2) . "%";
?>

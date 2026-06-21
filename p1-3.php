//1.3 Write a PHP program for operators in PHP.
<?php
$a = 15;
$b = 10;

echo "---Arithmetic Operations---<br>";
echo "Addition($a + $b): " . ($a + $b) . "<br>";
echo "Subtraction($a - $b): " . ($a - $b) . "<br>";

$c = 5;
$c += 10; 
echo "<br>---Assignment Operator---<br>";
echo "Value after += 10: $c <br>";

echo "<br>---Comparison Operator---<br>";
echo ($a > $b) ? "A is greater than B" : "A is not greater than B";
echo "<br>";

echo "<br>---Logical operator---<br>";
if ($a > 10 && $b < 20) {
    echo "Both conditions are true (using &&).";
}
?>

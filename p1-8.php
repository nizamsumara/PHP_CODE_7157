//Name :- Nizam Suamara
//Enroll :- 92400527157
//1.8 Write a PHP Program to reverse an array values entered by user. 
<?php
echo "Enter numbers or words separated by commas: ";
$input = trim(fgets(STDIN));
$originalArray = array_map('trim', explode(',', $input));
$reversedArray = array_reverse($originalArray);
echo "\n--- Results ---\n";
echo "Original Array:\n";
print_r($originalArray);
echo "\nReversed Array:\n";
print_r($reversedArray);
?>
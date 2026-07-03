//Name :- Nizam Suamara
//Enroll :- 92400527157
//2.3 Write a program to perform following array functions: 
//array_change_key_case($var, CASE_LOWER/CASE_UPPER). 
//array_count_values() 
//array_pop() 
//array_push(), sort()

<?php
$colors = array("ReD" => 1, "bLuE" => 2, "GReeN" => 3);
print_r(array_change_key_case($colors, CASE_UPPER));
print_r(array_change_key_case($colors, CASE_LOWER));

$animals = array("dog", "cat", "dog", "bird", "cat", "dog");
print_r(array_count_values($animals));

$stack = array("apple", "banana", "cherry", "date");
$popped_item = array_pop($stack);
print_r($stack);

$fruits = array("apple", "banana");
array_push($fruits, "orange", "kiwi");
print_r($fruits);

$numbers = array(42, 8, 15, 108, 16, 23);
sort($numbers);
print_r($numbers);
?>
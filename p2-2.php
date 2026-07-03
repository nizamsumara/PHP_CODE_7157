//Name :- Nizam Suamara
//Enroll :- 92400527157
//2.2 Write a PHP code for sorting an array entered by user.

<?php
$input_string = readline("Enter values separated by commas: ");
$user_array = explode(",", $input_string);
$user_array = array_map('trim', $user_array);
sort($user_array);
print_r($user_array);
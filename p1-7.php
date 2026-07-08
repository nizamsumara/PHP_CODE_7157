//Name :- Nizam Suamara
//Enroll :- 92400527157
//1.7 Write a PHP program to include a file using include and require function

// file1.php
//<?php
//echo "Welcome to PHP World";
//?>

<?php
include 'file1.php';
echo "This is the main body text loaded via the include function.\n";
require 'config.php'; 
echo "This line will only execute if 'config.php' was successfully found and loaded.\n";
?>
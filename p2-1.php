//2.1 Write a PHP code to create numeric array for Monday to Saturday,
//associative array for month with total days of month such as
//January=>30,February=>28 upto December and multidimensional array
//for laptop along with company name inside that model and price(any
//two companies).

<?php
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31);
$laptops = array(
    "Apple" => array(
        array("model" => "MacBook Air M3", "price" => 160000),
        array("model" => "MacBook Pro 14", "price" => 200000)
    ),
    "Dell" => array(
        array("model" => "XPS 13", "price" => 60000),
        array("model" => "Inspiron 15", "price" => 89500)
    )
);
print_r($days);
print_r($months);
print_r($laptops);
?>
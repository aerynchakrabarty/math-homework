<?php
// Example PHP code to demonstrate basic functions and variables

// Define a variable
$name = "John Doe";

// Accessing a property
$nameProperty = $name;

// Accessing an array element
$array = [1, 2, 3];
$arrayElement = $array[0];

// Output the results
echo "Hello, $name.";
echo "This is my name: $nameProperty.\n";
echo "Array elements: ", $arrayElement, "\n";

// Example variable assignment and operation
$age = 25;
$height = 175;
$weight = 70.5;

$BMI = ($weight / $height ** 2);
echo "Your Body Mass Index (BMI) is: " . $BMI . ".\n";

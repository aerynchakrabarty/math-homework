<?php
// Problem: How to calculate the average of an array of numbers

// Get input from user
$numbers = readline("Enter a space-separated list of numbers: ");

// Convert string to array
$numbersArray = explode(' ', $numbers);

// Calculate and display average
$average = array_sum($numbersArray) / count($numbersArray);
echo "The average is: " . $average;
?>

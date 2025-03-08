
<?php
// Define an array of math operations
$operations = ['+', '-', '*', '/'];

// Generate a random math problem
$problem = rand(1, 10) . ' ' . $operations[array_rand($operations)] . ' ' . rand(1, 10);

// Solve the problem and display the answer
echo "The answer is: " . eval('return ' . $problem . ';');
?>
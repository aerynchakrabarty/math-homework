<?php
// Define variables and initialize subject
$subject = "Math Assignment";

// Set question number
$questionNumber = 1;

// Generate a random math problem
$randomMathProblem = "What is the value of $variable1 + $variable2?" . "\n\n" . "Example: \n\nThe values are assigned based on your selection. What is the difference between the two numbers?";
// Insert the question and answer into the document
echo "<p>Question: $questionNumber</p>\n\n";
echo $randomMathProblem;
?>

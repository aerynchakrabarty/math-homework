<?php
// Generate a random number between 1 and 10
$randomNumber = rand(1, 10);

// Ask the user to guess the number
echo "Guess the number: ";
$userInput = trim(fgets(STDIN));

// Check if the user's input is equal to the random number
if ($userInput == $randomNumber) {
    echo "You guessed it! The number was $randomNumber.";
} else {
    echo "Sorry, you didn't guess it. The number was $randomNumber.";
}
?>
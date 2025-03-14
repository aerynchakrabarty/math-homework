 <?php
// function to generate random numbers between two given numbers
function generateRandomNumber($min = 10, $max = 20) {
    // generates a random number between 10 and 20
    return rand($min, $max);
}

// function to check if the number is prime or not
function isPrime($number) {
    // checks if the number is divisible by any number between 2 and the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// function to find prime numbers between two given numbers
function findPrimeNumbersBetweenTwoNumbers($start, $end) {
    // initializing an empty array to store the prime numbers
    $primeNumbers = [];

    // iterating from the start number to the end number
    for ($i = $start; $i <= $end; $i++) {
        // checking if the number is prime using the isPrime function
        if (isPrime($i)) {
            // adding the prime number to the array
            $primeNumbers[] = $i;
        }
    }

    // returning the array of prime numbers
    return $primeNumbers;
}

// function to generate a random prime number between two given numbers
function generateRandomPrimeNumber($min, $max) {
    // generating a random number between the min and max values
    $randomNumber = generateRandomNumber($min, $max);

    // checking if the number is prime using the isPrime function
    if (isPrime($randomNumber)) {
        return $randomNumber;
    } else {
        // generating a new random number if the previous one is not prime
        return generateRandomPrimeNumber($min, $max);
    }
}
?>
//Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.

<?php
function factorial($n) {
    // Base case: if n is 0 or 1, return 1
    if ($n <= 1) {
        return 1;
    }
    // Recursive case: n * factorial of (n-1)
    return $n * factorial($n - 1);
}

// Example of calling the function
echo factorial(5); // Output: 120
?>

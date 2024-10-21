//Write a PHP function named 'Fibonacci' that prints the Fibonacci series up to 12 numbers.

<?php
function Fibonacci($n) {
    $num1 = 0;
    $num2 = 1;
    
    // Print the first two numbers
    echo $num1 . " " . $num2 . " ";
    
    // Loop to calculate and print the next numbers in the series
    for ($i = 3; $i <= $n; $i++) {
        $num3 = $num1 + $num2;
        echo $num3 . " ";
        
        // Update the previous two numbers for the next iteration
        $num1 = $num2;
        $num2 = $num3;
    }
}

// Call the function to print Fibonacci series up to 12 numbers
Fibonacci(12);
?>

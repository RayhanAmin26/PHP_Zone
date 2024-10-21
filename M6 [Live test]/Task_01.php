//Create a PHP script using a loop to print all odd numbers between 1 and 10.

<?php
// Loop from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    // Check if the number is odd
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>

<?php 
function addFiveNumbers($num1, $num2, $num3, $num4, $num5){
    $sum = $num1 + $num2 + $num3 + $num4 + $num5;
    return $sum;
}

$sum = addFiveNumbers(10,33,45,22,23);
echo "The sum of 10,33,45,22 and 23 is $sum\n";
<?php 
function printStar($starCount){
    // $starCount = 100;
    for ($i= 1; $i <= $starCount; $i++){
        echo "*";
    }
    echo "\n";
}

printStar(66);
printStar(100);
<?php 
function printStar(){
    $starCount = 100;
    for ($i= 1; $i <= $starCount; $i++){
        echo "*";
    }
    echo "\n";
}

$starCount = 100;
printStar();
printStar();
printStar();
echo "This is heading\n";
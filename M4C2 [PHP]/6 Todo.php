<?php 

$marks = 40;

switch(true){
    case ($marks<=100 && $marks>=80);
        echo"A+";
    break;

    case ($marks<=80 && $marks>=70);
        echo"A";
    break;

    case ($marks<= 70 && $marks>= 60);
        echo "B";
    break;

    case ($marks<= 60 && $marks>= 50);
        echo "C";
    break;
    
    case ($marks<= 50 && $marks>= 40);
        echo "D";
    break;
    
    
    default:
    echo "F";
    break;

}
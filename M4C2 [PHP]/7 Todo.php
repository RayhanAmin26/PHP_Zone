<?php 


//Nested if else


$marks=30;

if($marks>=80){
    echo"A+";



}
else{
    if($marks<80 && $marks>=70){
        echo "A";
    }
    else{
        if($marks<= 70 && $marks>= 60){
            echo "A-";

        }
        else{
            if($marks>= 50 && $marks>= 40){
                echo "B";
            
        } 
            else{
                if($marks<40 && $marks>= 33){
                    echo "C";
                }
                else{
                    echo "F";

                }
    } 
} 
    }


}
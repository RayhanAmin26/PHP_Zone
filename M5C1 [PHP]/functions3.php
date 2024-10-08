<?php 
function greet($name,$time = "morning"){
    echo "good $time $name\n";
    
}

greet("john" , "morning");
greet("jane","afternoon");
greet("doe","evening");
greet("john");
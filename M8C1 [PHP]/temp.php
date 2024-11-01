<?php 
// class Person{
//     public function __construct($name){//constructor
//             echo "I am a person and my name os {$name}.\n";

//     }
// }

// $john = new Person("John");
// $rayhan = new Person("Rayhan");
// $Jimmy = new Person("Jimmy");

$fruits = [      //assotiative array
    "apple" =>100,
    "banana" =>50,
    "orange" =>80,

];
foreach($fruits as $fruit=>$price){
    echo "{$fruit} - {$price}\n";
}
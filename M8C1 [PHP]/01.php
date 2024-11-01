<?php 

class person {
    public $name;
    public $age;

    function introduce(){
        echo "Hi, I am {$this->name}, and I am {$this->age} years old.\n";
    }
}

$john = new person();//object
$john->name="John Doe";
$john->age="34";
$john->introduce();

$rayhan = new person();//object
$rayhan->name="Rayhan Amin";
$rayhan->age="24";
$rayhan->introduce();

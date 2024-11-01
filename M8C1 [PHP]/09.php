<?php 
class Car{
    public function doSomething(){
        $this->start();
        $this->honk();

    }

    private function start(){ //public eu thakle ei code run korbe
        echo "Car has started.\n";

    }

    public function  honk(){
        echo "Honk! Honk!.\n";
    }
}

$fortuner = new Car();
$fortuner->doSomething();
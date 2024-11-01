<?php 
class MileageCalculator{
    public $pricePerLitre;
    public $distance;
    public $totalFuelPrice;
    public function __construct($pricePerLitre, $distance, $totalFuelPrice){
        $this->pricePerLitre = $pricePerLitre;
        $this->distance = $distance;
        $this->totalFuelPrice = $totalFuelPrice;

    }
    function calculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
        $mileage = $this->distance / $totalFuel;
        echo "The mileage of the vehicle is {$mileage} KMPL.\n";
    }

}

$motorcycle = new MileageCalculator(125,119,499); //instantiate
$motorcycle->calculateKMPL();

$car = new MileageCalculator(129,420,4700);
$car->calculateKMPL();

$hybridCar = new MileageCalculator(125,420,2500);
$hybridCar->calculateKMPL();


<?php 
class MileageCalculator{
    public $pricePerLitre;
    public $distance;
    public $totalFuelPrice;
    function calculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
        $mileage = $this->distance / $totalFuel;
        echo "The mileage of the vehicle is {$mileage} KMPL.\n";
    }

}
$motorcycle = new MileageCalculator();
$motorcycle->pricePerLitre = 125;
$motorcycle->distance = 119;
$motorcycle->totalFuelPrice = 499;
$motorcycle->calculateKMPL();

$car = new MileageCalculator();
$car->pricePerLitre = 129;
$car->distance = 420;
$car->totalFuelPrice = 4700;
$car->calculateKMPL();

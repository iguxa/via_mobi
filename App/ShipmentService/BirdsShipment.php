<?php


namespace App\ShipmentService;


use App\Service\Contracts\BirdShipment;

class BirdsShipment implements \Birds
{
    protected $birdShipment;
    public function __construct(BirdShipment $birdShipment)
    {
        $this->birdShipment = $birdShipment;
    }
    public function calculate()
    {
        return $this->birdShipment->calculate();
    }
    public function delivery()
    {
        return $this->birdShipment->delivery();
    }
}
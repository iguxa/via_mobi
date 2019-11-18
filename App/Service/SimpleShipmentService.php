<?php

namespace App\Service;
use App\Service\Contracts\BirdShipment;

class SimpleShipmentService extends BaseShipmentService implements BirdShipment
{
    public function getInfo()
    {
        return ['cost'=>$this->calculate(),'delivery_period'=>$this->delivery()];
    }
    public function calculate($sum = 100): int
    {
        return rand($sum,1000);
    }
    public function delivery($date = 2)
    {
        return rand($date,10);
    }
}
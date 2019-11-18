<?php
namespace App\Service;
use App\Service\Contracts\TurtleShipment;

class CoefficientShipmentService extends BaseShipmentService implements TurtleShipment
{
    public function getInfo()
    {
        return ['cost'=>$this->calculate(),'delivery_period'=>$this->delivery()];
    }
    public function calculate(): int
    {
        return $this->getBaseCost()*$this->getCoefficient();
    }
    public function delivery($date = 2)
    {
        return rand($date,10);
    }
    public function getBaseCost()
    {
        return 150;
    }
    public function getCoefficient()
    {
        return 0.5;
    }
}
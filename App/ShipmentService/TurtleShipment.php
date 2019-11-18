<?php


namespace App\ShipmentService;


use App\Service\Contracts\TurtleShipment as Turtle;

class TurtleShipment
{
    protected $turtleShipment;
    public function __construct(Turtle $turtleShipment)
    {
        $this->turtleShipment = $turtleShipment;
    }
    public function calculate()
    {
        return $this->turtleShipment->calculate();
    }
    public function delivery()
    {
        return $this->turtleShipment->delivery();
    }
}
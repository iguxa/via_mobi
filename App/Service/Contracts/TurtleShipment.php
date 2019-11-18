<?php


namespace App\Service\Contracts;

interface TurtleShipment extends BaseShipment
{
    public function calculate();
    public function delivery();
}
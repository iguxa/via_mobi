<?php


namespace App\Service\Contracts;


interface BirdShipment extends BaseShipment
{
    public function calculate();
    public function delivery();
}
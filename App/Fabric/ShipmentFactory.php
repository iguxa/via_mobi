<?php

namespace App\Fabric;

use App\Fabric\Contracts\Shipment;
use App\Service\Contracts\BaseShipment;

class ShipmentFactory implements Shipment
{
    protected $shipments;
    public function getShipments(): array
    {
        if($this->shipments){
            return $this->shipments;
        }
        throw new \Exception('Non shipments added');
    }
    public function addShipment(BaseShipment $shipment,$provider)
    {
        $this->shipments[$provider] = $shipment;
    }
    public function get(string $shipments): BaseShipment
    {
        foreach ($this->shipments as $shipment){
            if($shipment->getType() == $shipments){
                return $shipment;
            }
        }
        throw new \Exception("Non shipments {$shipments}");
    }
}
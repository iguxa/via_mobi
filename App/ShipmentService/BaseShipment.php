<?php

namespace  App\ShipmentService;
use App\Fabric\ShipmentFactory;

class BaseShipment
{
    protected $shipmentFactory;
    public function __construct(ShipmentFactory $shipmentFactory)
    {
        $this->shipmentFactory = $shipmentFactory;
    }
    public function getInfo(string $name): array
    {
        return $this->shipmentFactory->get($name)->getInfo();
    }
    public function getInfoAll(): array
    {
        $shipment = [];
        foreach ($this->shipmentFactory->getShipments() as $key =>$shipment){
            $shipment[$key] = $shipment->getInfo();
        }
        return $shipment;
    }
}
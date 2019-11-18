<?php

namespace App\Fabric\Contracts;

use App\Service\Contracts\BaseShipment;

interface Shipment
{
    public function getShipments(): ?array ;
}
<?php


namespace App\Config;


use App\Service\SimpleShipmentService;
use App\Service\CoefficientShipmentService;

class Providers
{
    //driver||adapters
    protected $providers = [
        'bird' => SimpleShipmentService::class,
        'turtle' => CoefficientShipmentService::class,
    ];
    public function get($adapter)
    {
        if(isset($this->providers[$adapter])){
            return $this->providers[$adapter];
        }
        throw new \Exception("don't found adapter {$adapter}");
    }

}
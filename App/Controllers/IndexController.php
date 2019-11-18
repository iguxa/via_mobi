<?php

namespace App\Controllers;

use App\ShipmentService\BirdsShipment;
use App\ShipmentService\TurtleShipment;
use App\Config\Providers;
use App\Fabric\ShipmentFactory;
use App\Service\CoefficientShipmentService;
use App\Service\SimpleShipmentService;
use App\ShipmentService\BaseShipment;

class IndexController
{
    /**
     * @return array|string
     */
    public function index()
    {
        try{
            $providers = new Providers();
            $birdProvider = $providers->get('bird');
            $turtleProvider = $providers->get('turtle');
            /**
             * @var SimpleShipmentService $birdShipment
             * @var CoefficientShipmentService $turtleShipment
             * @var SimpleShipmentService $bird2Shipment
             */
            $birdShipment = new $birdProvider('ул.Покровская 6','ул.Невская 32',['weight'=>'wdwdwd','some'=>'wdwdwd']);
            $turtleShipment = new $turtleProvider('ул.Покровская 6','ул.Невская 32',['weight'=>'wdwdwd','some'=>'wdwdwd']);
            $bird2Shipment = new $birdProvider('ул.Покровская 6','ул.Невская 32',['weight'=>'wdwdwd','some'=>'wdwdwd']);

            $shipment = new ShipmentFactory();
            $shipment->addShipment($birdShipment,'bird');
            $shipment->addShipment($turtleShipment,'turtle');
            $shipment->addShipment($bird2Shipment,'bird2');

            $bird_transformer = new BirdsShipment($shipment->get('bird'));
            $turtle_transformer = new TurtleShipment($shipment->get('turtle'));
            $bird2_transformer = new BirdsShipment($shipment->get('bird2'));
            $base_transformer = new BaseShipment($shipment);

            $bird_shipment = [$bird_transformer->delivery(),$bird_transformer->calculate()];
            $turtle_shipment = [$turtle_transformer->delivery(),$turtle_transformer->calculate()];
            $bird2_shipment = [$bird2_transformer->delivery(),$bird2_transformer->calculate()];
            $all_shipment = $base_transformer->getInfoAll();

            return compact('bird_shipment','turtle_shipment','bird2_shipment','all_shipment');
        }catch (\Exception $e){
            return ($e->getMessage());
        }
    }

}
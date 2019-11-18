<?php

namespace App\Service;
use App\Service\Contracts\BaseShipment;

abstract class BaseShipmentService implements BaseShipment
{
    protected $sender_address;
    protected $recipient_address;
    protected $options;
    public function __construct(string $sender_address ,string $recipient_address ,array $options)
    {
        $this->sender_address = $sender_address;
        $this->recipient_address = $recipient_address;
        $this->options = $options;
        $this->init();
    }
    protected function init(){}
    abstract public function delivery();
    abstract public function calculate(): int;
}
<?php
namespace Creators;

use Interfaces\IDelivery;

abstract class DeliveryFactory
{
    abstract public function getDelivery () : IDelivery;
}
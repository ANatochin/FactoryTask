<?php
namespace Creators;

use Interfaces\IDelivery;
use WorkClasses\StandardTaxi;

class StandardDelCreator extends DeliveryFactory
{
    public function getDelivery(): IDelivery
    {
        return new StandardTaxi();
    }
}

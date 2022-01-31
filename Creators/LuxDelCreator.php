<?php
namespace Creators;

use Interfaces\IDelivery;
use WorkClasses\LuxTaxi;

class LuxDelCreator extends DeliveryFactory
{
    public function getDelivery(): IDelivery
    {
        return new LuxTaxi();
    }
}

<?php

namespace Creators;

use Interfaces\IDelivery;
use WorkClasses\EconomTaxi;

class EconomDelCreator extends DeliveryFactory
{

    public function getDelivery(): IDelivery
    {
        return new EconomTaxi();
    }
}
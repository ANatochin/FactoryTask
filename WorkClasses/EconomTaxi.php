<?php

namespace WorkClasses;

use Interfaces\IDelivery;

class EconomTaxi implements IDelivery
{

    public function getCarModel()
    {
        return 'Econom Model';
    }

    public function getPrice()
    {
        return 'econom price';
    }
}

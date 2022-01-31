<?php
namespace WorkClasses;

use Interfaces\IDelivery;

class StandardTaxi implements IDelivery
{

    public function getCarModel()
    {
        return 'Standard Model';
    }

    public function getPrice()
    {
        return 'Standard price';
    }
}
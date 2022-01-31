<?php
namespace WorkClasses;

use Interfaces\IDelivery;

class LuxTaxi implements IDelivery
{

    public function getCarModel()
    {
        return 'Lux Model';
    }

    public function getPrice()
    {
        return 'Lux price';
    }
}
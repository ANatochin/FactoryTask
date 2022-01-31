<?php

include_once __DIR__ . '/vendor/autoload.php';

use Creators\EconomDelCreator;


$creatorE = new EconomDelCreator();

$economDelivery = $creatorE->getDelivery();

var_dump($economDelivery->getCarModel());
var_dump($economDelivery->getPrice());
echo ('<br>');
$secEconomDel = $creatorE->getDelivery();
var_dump($secEconomDel->getCarModel());
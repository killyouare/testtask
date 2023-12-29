<?php

namespace Killyouare\Testtask\App\Cars;

class Car extends CarBase
{

    private $passengerSeatsCount;
    private $carType = 'car';

    public function __construct($brand, $photoFileName, $carrying, $passengerSeatsCount)
    {
        parent::__construct($brand, $photoFileName, $carrying);
        $this->passengerSeatsCount = $passengerSeatsCount;
    }
}

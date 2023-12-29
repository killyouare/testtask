<?php

namespace Killyouare\Testtask\App\Factories;

use Killyouare\Testtask\App\Cars\Car;
use Killyouare\Testtask\App\Cars\CarBase;
use Killyouare\Testtask\App\Cars\SpecMachine;
use Killyouare\Testtask\App\Cars\Truck;
use Killyouare\Testtask\App\Data\DataParser;

class CarFactory
{
    /**
     * @param DataParser $data
     * @return CarBase|null
     */
    static function make(DataParser $data)
    {
        if ($data->getCarType() === "car" && !empty($data->getBrand())) {
            return new Car($data->getBrand(), $data->getPhotoFileName(), $data->getCarrying(), $data->getPassengerSeatsCount());
        } else if ($data->getCarType() === "truck") {
            return new Truck($data->getBrand(), $data->getPhotoFileName(), $data->getCarrying(), $data->getBodyWhl());
        } else if (!empty($data->getExtra())) {
            return new SpecMachine($data->getBrand(), $data->getPhotoFileName(), $data->getCarrying(), $data->getExtra());
        }
        return null;
    }
}

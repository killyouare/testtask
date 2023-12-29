<?php

namespace Killyouare\Testtask\App\Aggregators;

use Killyouare\Testtask\App\Cars\CarBase;

class CarAggregator
{
    protected $carList = [];

    public function add(CarBase $car): self
    {
        $this->carList[] = $car;

        return $this;
    }

    public function toArray(): array
    {
        return $this->carList;
    }
}

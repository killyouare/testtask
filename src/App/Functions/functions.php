<?php

use Killyouare\Testtask\App\Aggregators\CarAggregator;
use Killyouare\Testtask\App\Data\DataParser;
use Killyouare\Testtask\App\Factories\CarFactory;
use Killyouare\Testtask\App\Files\FileReader;

function getCarList(string $csvFilename)
{
    $carAggregator = new CarAggregator();

    $file = new FileReader($csvFilename);

    $fileIsOpen = $file->openFile('r');

    if ($fileIsOpen === false) {
        return $carAggregator->toArray();
    }

    while ((($data = $file->getNextRow()) !== false)) {
        if (DataParser::notValidParams($data)) {
            continue;
        }

        $data = new DataParser($data);

        $car = CarFactory::make($data);

        if (is_null($car)) {
            continue;
        }

        $carAggregator->add($car);
    }

    return $carAggregator->toArray();
}

<?php

namespace Killyouare\Testtask\App\Cars;

class SpecMachine extends CarBase
{
    private $carType;
    private $extra;

    public function __construct($brand, $photoFileName, $carrying, $extra)
    {
        parent::__construct($brand, $photoFileName, $carrying);
        $this->carType = "spec_machine";
        $this->extra = $extra;
    }
}

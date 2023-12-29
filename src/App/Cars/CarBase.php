<?php

namespace Killyouare\Testtask\App\Cars;

class CarBase
{
    private $brand;
    private $photoFileName;
    private $carrying;

    public function __construct($brand, $photoFileName, $carrying)
    {
        $this->brand = $brand;
        $this->photoFileName = $photoFileName;
        $this->carrying = $carrying;
    }

    public function getPhotoFileExt()
    {
        list($fileName, $ect) = explode('.', $this->photoFileName);
        return '.' . $ect;
    }
}

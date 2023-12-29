<?php

namespace Killyouare\Testtask\App\Cars;

use Killyouare\Testtask\App\Data\WhlParser;

class Truck extends CarBase
{
    private $bodyWidth;
    private $bodyHeight;
    private $bodyLength;

    public function __construct($brand, $photoFileName, $carrying, WhlParser $bodyWhl)
    {
        parent::__construct($brand, $photoFileName, $carrying);
        $this->bodyWidth = $bodyWhl->getWidth();
        $this->bodyHeight = $bodyWhl->getHeight();
        $this->bodyLength = $bodyWhl->getLength();
    }

    public function getBodyVolume()
    {
        return $this->bodyWidth * $this->bodyLength * $this->bodyHeight;
    }
}

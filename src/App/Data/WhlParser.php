<?php

namespace Killyouare\Testtask\App\Data;
class WhlParser
{
    /**
     * @var float
     */
    private $width = 0.0;
    /**
     * @var float
     */
    private $height = 0.0;
    /**
     * @var float
     */
    private $length = 0.0;

    public function __construct($whl)
    {
        list($width, $height, $length) = explode('x', $whl);
        if (!empty($width)) {
            $this->width = floatval($width);
            $this->height = floatval($height);
            $this->length = floatval($length);
        }
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }
}

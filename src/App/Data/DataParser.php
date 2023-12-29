<?php

namespace Killyouare\Testtask\App\Data;

use Exception;

class DataParser
{
    /**
     * @var mixed
     */
    private $carType;
    /**
     * @var mixed
     */
    private $brand;

    /**
     * @var int
     */
    private $passengerSeatsCount;
    /**
     * @var mixed
     */
    private $photoFileName;
    /**
     * @var WhlParser
     */
    private $bodyWhl;
    /**
     * @var float
     */
    private $carrying;
    /**
     * @var mixed
     */
    private $extra;

    /**
     * @throws Exception
     */
    public function __construct($params)
    {
        if (self::notValidParams($params)) {
            throw new Exception('Params not valid');
        }
        list ($carType, $brand, $passengerSeatsCount, $photoFileName, $bodyWhl, $carrying, $extra) = $params;
        $this->carType = $carType;
        $this->brand = $brand;
        $this->passengerSeatsCount = (int)$passengerSeatsCount;
        $this->photoFileName = $photoFileName;
        $this->bodyWhl = new WhlParser($bodyWhl);
        $this->carrying = (float)$carrying;
        $this->extra = $extra;
    }

    public static function notValidParams(array $params): bool
    {
        return count($params) !== 7 || empty($params[1]) || empty($params[3]) || empty($params[5]);
    }

    /**
     * @return int
     */
    public function getPassengerSeatsCount()
    {
        return $this->passengerSeatsCount;
    }

    /**
     * @return mixed
     */
    public function getPhotoFileName()
    {
        return $this->photoFileName;
    }

    /**
     * @return WhlParser
     */
    public function getBodyWhl()
    {
        return $this->bodyWhl;
    }

    /**
     * @return float
     */
    public function getCarrying()
    {
        return $this->carrying;
    }

    /**
     * @return mixed
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @return mixed
     */
    public function getCarType()
    {
        return $this->carType;
    }

    public function getBrand()
    {
        return $this->brand;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class getHotelListOfRatesResponse
{

    /**
     * @var getHotelListOfRatesResult $getHotelListOfRatesResult
     */
    protected $getHotelListOfRatesResult = null;

    /**
     * @param getHotelListOfRatesResult $getHotelListOfRatesResult
     */
    public function __construct($getHotelListOfRatesResult)
    {
        $this->getHotelListOfRatesResult = $getHotelListOfRatesResult;
    }

    /**
     * @return getHotelListOfRatesResult
     */
    public function getGetHotelListOfRatesResult()
    {
        return $this->getHotelListOfRatesResult;
    }

    /**
     * @param getHotelListOfRatesResult $getHotelListOfRatesResult
     * @return \Gueststream\PMS\IQWare\API\getHotelListOfRatesResponse
     */
    public function setGetHotelListOfRatesResult($getHotelListOfRatesResult)
    {
        $this->getHotelListOfRatesResult = $getHotelListOfRatesResult;
        return $this;
    }
}

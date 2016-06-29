<?php

namespace Gueststream\PMS\IQWare\API;

class getHotelInfosAllResponse
{

    /**
     * @var getHotelInfosAllResult $getHotelInfosAllResult
     */
    protected $getHotelInfosAllResult = null;

    /**
     * @param getHotelInfosAllResult $getHotelInfosAllResult
     */
    public function __construct($getHotelInfosAllResult)
    {
        $this->getHotelInfosAllResult = $getHotelInfosAllResult;
    }

    /**
     * @return getHotelInfosAllResult
     */
    public function getGetHotelInfosAllResult()
    {
        return $this->getHotelInfosAllResult;
    }

    /**
     * @param getHotelInfosAllResult $getHotelInfosAllResult
     * @return \Gueststream\PMS\IQWare\API\getHotelInfosAllResponse
     */
    public function setGetHotelInfosAllResult($getHotelInfosAllResult)
    {
        $this->getHotelInfosAllResult = $getHotelInfosAllResult;
        return $this;
    }
}

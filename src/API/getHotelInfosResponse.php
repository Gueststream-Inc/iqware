<?php

namespace Gueststream\PMS\IQWare\API;

class getHotelInfosResponse
{

    /**
     * @var getHotelInfosResult $getHotelInfosResult
     */
    protected $getHotelInfosResult = null;

    /**
     * @param getHotelInfosResult $getHotelInfosResult
     */
    public function __construct($getHotelInfosResult)
    {
        $this->getHotelInfosResult = $getHotelInfosResult;
    }

    /**
     * @return getHotelInfosResult
     */
    public function getGetHotelInfosResult()
    {
        return $this->getHotelInfosResult;
    }

    /**
     * @param getHotelInfosResult $getHotelInfosResult
     * @return \Gueststream\PMS\IQWare\API\getHotelInfosResponse
     */
    public function setGetHotelInfosResult($getHotelInfosResult)
    {
        $this->getHotelInfosResult = $getHotelInfosResult;
        return $this;
    }
}

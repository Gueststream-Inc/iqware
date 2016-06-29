<?php

namespace Gueststream\PMS\IQWare\API;

class getHotelListOfBusinessSourcesResponse
{

    /**
     * @var getHotelListOfBusinessSourcesResult $getHotelListOfBusinessSourcesResult
     */
    protected $getHotelListOfBusinessSourcesResult = null;

    /**
     * @param getHotelListOfBusinessSourcesResult $getHotelListOfBusinessSourcesResult
     */
    public function __construct($getHotelListOfBusinessSourcesResult)
    {
        $this->getHotelListOfBusinessSourcesResult = $getHotelListOfBusinessSourcesResult;
    }

    /**
     * @return getHotelListOfBusinessSourcesResult
     */
    public function getGetHotelListOfBusinessSourcesResult()
    {
        return $this->getHotelListOfBusinessSourcesResult;
    }

    /**
     * @param getHotelListOfBusinessSourcesResult $getHotelListOfBusinessSourcesResult
     * @return \Gueststream\PMS\IQWare\API\getHotelListOfBusinessSourcesResponse
     */
    public function setGetHotelListOfBusinessSourcesResult($getHotelListOfBusinessSourcesResult)
    {
        $this->getHotelListOfBusinessSourcesResult = $getHotelListOfBusinessSourcesResult;
        return $this;
    }
}

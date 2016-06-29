<?php

namespace Gueststream\PMS\IQWare\API;

class getHotelListOfRoomTypesResponse
{

    /**
     * @var getHotelListOfRoomTypesResult $getHotelListOfRoomTypesResult
     */
    protected $getHotelListOfRoomTypesResult = null;

    /**
     * @param getHotelListOfRoomTypesResult $getHotelListOfRoomTypesResult
     */
    public function __construct($getHotelListOfRoomTypesResult)
    {
        $this->getHotelListOfRoomTypesResult = $getHotelListOfRoomTypesResult;
    }

    /**
     * @return getHotelListOfRoomTypesResult
     */
    public function getGetHotelListOfRoomTypesResult()
    {
        return $this->getHotelListOfRoomTypesResult;
    }

    /**
     * @param getHotelListOfRoomTypesResult $getHotelListOfRoomTypesResult
     * @return \Gueststream\PMS\IQWare\API\getHotelListOfRoomTypesResponse
     */
    public function setGetHotelListOfRoomTypesResult($getHotelListOfRoomTypesResult)
    {
        $this->getHotelListOfRoomTypesResult = $getHotelListOfRoomTypesResult;
        return $this;
    }
}

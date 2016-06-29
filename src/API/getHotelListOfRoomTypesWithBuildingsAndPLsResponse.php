<?php

namespace Gueststream\PMS\IQWare\API;

class getHotelListOfRoomTypesWithBuildingsAndPLsResponse
{

    /**
     * @var ArrayOfRoomTypeBuildingsAndPL $getHotelListOfRoomTypesWithBuildingsAndPLsResult
     */
    protected $getHotelListOfRoomTypesWithBuildingsAndPLsResult = null;

    /**
     * @param ArrayOfRoomTypeBuildingsAndPL $getHotelListOfRoomTypesWithBuildingsAndPLsResult
     */
    public function __construct($getHotelListOfRoomTypesWithBuildingsAndPLsResult)
    {
        $this->getHotelListOfRoomTypesWithBuildingsAndPLsResult = $getHotelListOfRoomTypesWithBuildingsAndPLsResult;
    }

    /**
     * @return ArrayOfRoomTypeBuildingsAndPL
     */
    public function getGetHotelListOfRoomTypesWithBuildingsAndPLsResult()
    {
        return $this->getHotelListOfRoomTypesWithBuildingsAndPLsResult;
    }

    /**
     * @param ArrayOfRoomTypeBuildingsAndPL $getHotelListOfRoomTypesWithBuildingsAndPLsResult
     * @return \Gueststream\PMS\IQWare\API\getHotelListOfRoomTypesWithBuildingsAndPLsResponse
     */
    public function setGetHotelListOfRoomTypesWithBuildingsAndPLsResult($getHotelListOfRoomTypesWithBuildingsAndPLsResult)
    {
        $this->getHotelListOfRoomTypesWithBuildingsAndPLsResult = $getHotelListOfRoomTypesWithBuildingsAndPLsResult;
        return $this;
    }
}

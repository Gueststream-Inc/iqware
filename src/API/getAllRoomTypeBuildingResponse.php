<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomTypeBuildingResponse
{

    /**
     * @var getAllRoomTypeBuildingResult $getAllRoomTypeBuildingResult
     */
    protected $getAllRoomTypeBuildingResult = null;

    /**
     * @param getAllRoomTypeBuildingResult $getAllRoomTypeBuildingResult
     */
    public function __construct($getAllRoomTypeBuildingResult)
    {
        $this->getAllRoomTypeBuildingResult = $getAllRoomTypeBuildingResult;
    }

    /**
     * @return getAllRoomTypeBuildingResult
     */
    public function getGetAllRoomTypeBuildingResult()
    {
        return $this->getAllRoomTypeBuildingResult;
    }

    /**
     * @param getAllRoomTypeBuildingResult $getAllRoomTypeBuildingResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomTypeBuildingResponse
     */
    public function setGetAllRoomTypeBuildingResult($getAllRoomTypeBuildingResult)
    {
        $this->getAllRoomTypeBuildingResult = $getAllRoomTypeBuildingResult;
        return $this;
    }
}

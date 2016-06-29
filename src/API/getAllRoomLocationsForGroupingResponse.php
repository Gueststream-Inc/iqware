<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomLocationsForGroupingResponse
{

    /**
     * @var ArrayOfRoomLocationGrouping $getAllRoomLocationsForGroupingResult
     */
    protected $getAllRoomLocationsForGroupingResult = null;

    /**
     * @param ArrayOfRoomLocationGrouping $getAllRoomLocationsForGroupingResult
     */
    public function __construct($getAllRoomLocationsForGroupingResult)
    {
        $this->getAllRoomLocationsForGroupingResult = $getAllRoomLocationsForGroupingResult;
    }

    /**
     * @return ArrayOfRoomLocationGrouping
     */
    public function getGetAllRoomLocationsForGroupingResult()
    {
        return $this->getAllRoomLocationsForGroupingResult;
    }

    /**
     * @param ArrayOfRoomLocationGrouping $getAllRoomLocationsForGroupingResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomLocationsForGroupingResponse
     */
    public function setGetAllRoomLocationsForGroupingResult($getAllRoomLocationsForGroupingResult)
    {
        $this->getAllRoomLocationsForGroupingResult = $getAllRoomLocationsForGroupingResult;
        return $this;
    }
}

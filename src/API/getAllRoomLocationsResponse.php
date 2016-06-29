<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomLocationsResponse
{

    /**
     * @var ArrayOfRoomLocation $getAllRoomLocationsResult
     */
    protected $getAllRoomLocationsResult = null;

    /**
     * @param ArrayOfRoomLocation $getAllRoomLocationsResult
     */
    public function __construct($getAllRoomLocationsResult)
    {
        $this->getAllRoomLocationsResult = $getAllRoomLocationsResult;
    }

    /**
     * @return ArrayOfRoomLocation
     */
    public function getGetAllRoomLocationsResult()
    {
        return $this->getAllRoomLocationsResult;
    }

    /**
     * @param ArrayOfRoomLocation $getAllRoomLocationsResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomLocationsResponse
     */
    public function setGetAllRoomLocationsResult($getAllRoomLocationsResult)
    {
        $this->getAllRoomLocationsResult = $getAllRoomLocationsResult;
        return $this;
    }
}

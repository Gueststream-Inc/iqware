<?php

namespace Gueststream\PMS\IQWare\API;

class getRoomLocationsResponse
{

    /**
     * @var getRoomLocationsResult $getRoomLocationsResult
     */
    protected $getRoomLocationsResult = null;

    /**
     * @param getRoomLocationsResult $getRoomLocationsResult
     */
    public function __construct($getRoomLocationsResult)
    {
        $this->getRoomLocationsResult = $getRoomLocationsResult;
    }

    /**
     * @return getRoomLocationsResult
     */
    public function getGetRoomLocationsResult()
    {
        return $this->getRoomLocationsResult;
    }

    /**
     * @param getRoomLocationsResult $getRoomLocationsResult
     * @return \Gueststream\PMS\IQWare\API\getRoomLocationsResponse
     */
    public function setGetRoomLocationsResult($getRoomLocationsResult)
    {
        $this->getRoomLocationsResult = $getRoomLocationsResult;
        return $this;
    }
}

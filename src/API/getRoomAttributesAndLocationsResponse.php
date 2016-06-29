<?php

namespace Gueststream\PMS\IQWare\API;

class getRoomAttributesAndLocationsResponse
{

    /**
     * @var getRoomAttributesAndLocationsResult $getRoomAttributesAndLocationsResult
     */
    protected $getRoomAttributesAndLocationsResult = null;

    /**
     * @param getRoomAttributesAndLocationsResult $getRoomAttributesAndLocationsResult
     */
    public function __construct($getRoomAttributesAndLocationsResult)
    {
        $this->getRoomAttributesAndLocationsResult = $getRoomAttributesAndLocationsResult;
    }

    /**
     * @return getRoomAttributesAndLocationsResult
     */
    public function getGetRoomAttributesAndLocationsResult()
    {
        return $this->getRoomAttributesAndLocationsResult;
    }

    /**
     * @param getRoomAttributesAndLocationsResult $getRoomAttributesAndLocationsResult
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributesAndLocationsResponse
     */
    public function setGetRoomAttributesAndLocationsResult($getRoomAttributesAndLocationsResult)
    {
        $this->getRoomAttributesAndLocationsResult = $getRoomAttributesAndLocationsResult;
        return $this;
    }
}

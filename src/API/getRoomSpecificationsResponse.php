<?php

namespace Gueststream\PMS\IQWare\API;

class getRoomSpecificationsResponse
{

    /**
     * @var RoomSpecification $getRoomSpecificationsResult
     */
    protected $getRoomSpecificationsResult = null;

    /**
     * @param RoomSpecification $getRoomSpecificationsResult
     */
    public function __construct($getRoomSpecificationsResult)
    {
        $this->getRoomSpecificationsResult = $getRoomSpecificationsResult;
    }

    /**
     * @return RoomSpecification
     */
    public function getGetRoomSpecificationsResult()
    {
        return $this->getRoomSpecificationsResult;
    }

    /**
     * @param RoomSpecification $getRoomSpecificationsResult
     * @return \Gueststream\PMS\IQWare\API\getRoomSpecificationsResponse
     */
    public function setGetRoomSpecificationsResult($getRoomSpecificationsResult)
    {
        $this->getRoomSpecificationsResult = $getRoomSpecificationsResult;
        return $this;
    }
}

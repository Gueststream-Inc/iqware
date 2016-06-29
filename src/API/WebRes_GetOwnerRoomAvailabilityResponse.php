<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetOwnerRoomAvailabilityResponse
{

    /**
     * @var RoomAvailability $WebRes_GetOwnerRoomAvailabilityResult
     */
    protected $WebRes_GetOwnerRoomAvailabilityResult = null;

    /**
     * @param RoomAvailability $WebRes_GetOwnerRoomAvailabilityResult
     */
    public function __construct($WebRes_GetOwnerRoomAvailabilityResult)
    {
        $this->WebRes_GetOwnerRoomAvailabilityResult = $WebRes_GetOwnerRoomAvailabilityResult;
    }

    /**
     * @return RoomAvailability
     */
    public function getWebRes_GetOwnerRoomAvailabilityResult()
    {
        return $this->WebRes_GetOwnerRoomAvailabilityResult;
    }

    /**
     * @param RoomAvailability $WebRes_GetOwnerRoomAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityResponse
     */
    public function setWebRes_GetOwnerRoomAvailabilityResult($WebRes_GetOwnerRoomAvailabilityResult)
    {
        $this->WebRes_GetOwnerRoomAvailabilityResult = $WebRes_GetOwnerRoomAvailabilityResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetOwnerRoomAvailabilityByAdminIDResponse
{

    /**
     * @var RoomAvailability $WebRes_GetOwnerRoomAvailabilityByAdminIDResult
     */
    protected $WebRes_GetOwnerRoomAvailabilityByAdminIDResult = null;

    /**
     * @param RoomAvailability $WebRes_GetOwnerRoomAvailabilityByAdminIDResult
     */
    public function __construct($WebRes_GetOwnerRoomAvailabilityByAdminIDResult)
    {
        $this->WebRes_GetOwnerRoomAvailabilityByAdminIDResult = $WebRes_GetOwnerRoomAvailabilityByAdminIDResult;
    }

    /**
     * @return RoomAvailability
     */
    public function getWebRes_GetOwnerRoomAvailabilityByAdminIDResult()
    {
        return $this->WebRes_GetOwnerRoomAvailabilityByAdminIDResult;
    }

    /**
     * @param RoomAvailability $WebRes_GetOwnerRoomAvailabilityByAdminIDResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailabilityByAdminIDResponse
     */
    public function setWebRes_GetOwnerRoomAvailabilityByAdminIDResult($WebRes_GetOwnerRoomAvailabilityByAdminIDResult)
    {
        $this->WebRes_GetOwnerRoomAvailabilityByAdminIDResult = $WebRes_GetOwnerRoomAvailabilityByAdminIDResult;
        return $this;
    }
}

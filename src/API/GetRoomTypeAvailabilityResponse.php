<?php

namespace Gueststream\PMS\IQWare\API;

class GetRoomTypeAvailabilityResponse
{

    /**
     * @var ArrayOfRoomTypeAvailability $GetRoomTypeAvailabilityResult
     */
    protected $GetRoomTypeAvailabilityResult = null;

    /**
     * @param ArrayOfRoomTypeAvailability $GetRoomTypeAvailabilityResult
     */
    public function __construct($GetRoomTypeAvailabilityResult)
    {
        $this->GetRoomTypeAvailabilityResult = $GetRoomTypeAvailabilityResult;
    }

    /**
     * @return ArrayOfRoomTypeAvailability
     */
    public function getGetRoomTypeAvailabilityResult()
    {
        return $this->GetRoomTypeAvailabilityResult;
    }

    /**
     * @param ArrayOfRoomTypeAvailability $GetRoomTypeAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\GetRoomTypeAvailabilityResponse
     */
    public function setGetRoomTypeAvailabilityResult($GetRoomTypeAvailabilityResult)
    {
        $this->GetRoomTypeAvailabilityResult = $GetRoomTypeAvailabilityResult;
        return $this;
    }
}

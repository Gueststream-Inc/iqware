<?php

namespace Gueststream\PMS\IQWare\API;

class getUnitAvailabilityCalendarResponse
{

    /**
     * @var ArrayOfRoomCalendarBreakdown $getUnitAvailabilityCalendarResult
     */
    protected $getUnitAvailabilityCalendarResult = null;

    /**
     * @param ArrayOfRoomCalendarBreakdown $getUnitAvailabilityCalendarResult
     */
    public function __construct($getUnitAvailabilityCalendarResult)
    {
        $this->getUnitAvailabilityCalendarResult = $getUnitAvailabilityCalendarResult;
    }

    /**
     * @return ArrayOfRoomCalendarBreakdown
     */
    public function getGetUnitAvailabilityCalendarResult()
    {
        return $this->getUnitAvailabilityCalendarResult;
    }

    /**
     * @param ArrayOfRoomCalendarBreakdown $getUnitAvailabilityCalendarResult
     * @return \Gueststream\PMS\IQWare\API\getUnitAvailabilityCalendarResponse
     */
    public function setGetUnitAvailabilityCalendarResult($getUnitAvailabilityCalendarResult)
    {
        $this->getUnitAvailabilityCalendarResult = $getUnitAvailabilityCalendarResult;
        return $this;
    }
}

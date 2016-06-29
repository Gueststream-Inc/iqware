<?php

namespace Gueststream\PMS\IQWare\API;

class getUnitAvailabilityCalendarBreakdownResponse
{

    /**
     * @var ArrayOfRoomCalendar $getUnitAvailabilityCalendarBreakdownResult
     */
    protected $getUnitAvailabilityCalendarBreakdownResult = null;

    /**
     * @param ArrayOfRoomCalendar $getUnitAvailabilityCalendarBreakdownResult
     */
    public function __construct($getUnitAvailabilityCalendarBreakdownResult)
    {
        $this->getUnitAvailabilityCalendarBreakdownResult = $getUnitAvailabilityCalendarBreakdownResult;
    }

    /**
     * @return ArrayOfRoomCalendar
     */
    public function getGetUnitAvailabilityCalendarBreakdownResult()
    {
        return $this->getUnitAvailabilityCalendarBreakdownResult;
    }

    /**
     * @param ArrayOfRoomCalendar $getUnitAvailabilityCalendarBreakdownResult
     * @return \Gueststream\PMS\IQWare\API\getUnitAvailabilityCalendarBreakdownResponse
     */
    public function setGetUnitAvailabilityCalendarBreakdownResult($getUnitAvailabilityCalendarBreakdownResult)
    {
        $this->getUnitAvailabilityCalendarBreakdownResult = $getUnitAvailabilityCalendarBreakdownResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class getUnitAvailabilityForCalendarResponse
{

    /**
     * @var ArrayOfUnitAvailabilityCalendar $getUnitAvailabilityForCalendarResult
     */
    protected $getUnitAvailabilityForCalendarResult = null;

    /**
     * @param ArrayOfUnitAvailabilityCalendar $getUnitAvailabilityForCalendarResult
     */
    public function __construct($getUnitAvailabilityForCalendarResult)
    {
        $this->getUnitAvailabilityForCalendarResult = $getUnitAvailabilityForCalendarResult;
    }

    /**
     * @return ArrayOfUnitAvailabilityCalendar
     */
    public function getGetUnitAvailabilityForCalendarResult()
    {
        return $this->getUnitAvailabilityForCalendarResult;
    }

    /**
     * @param ArrayOfUnitAvailabilityCalendar $getUnitAvailabilityForCalendarResult
     * @return \Gueststream\PMS\IQWare\API\getUnitAvailabilityForCalendarResponse
     */
    public function setGetUnitAvailabilityForCalendarResult($getUnitAvailabilityForCalendarResult)
    {
        $this->getUnitAvailabilityForCalendarResult = $getUnitAvailabilityForCalendarResult;
        return $this;
    }
}

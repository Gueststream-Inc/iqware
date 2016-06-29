<?php

namespace Gueststream\PMS\IQWare\API;

class getUnitsAvailabilityCalendarResponse
{

    /**
     * @var ArrayOfUnitDate $getUnitsAvailabilityCalendarResult
     */
    protected $getUnitsAvailabilityCalendarResult = null;

    /**
     * @param ArrayOfUnitDate $getUnitsAvailabilityCalendarResult
     */
    public function __construct($getUnitsAvailabilityCalendarResult)
    {
        $this->getUnitsAvailabilityCalendarResult = $getUnitsAvailabilityCalendarResult;
    }

    /**
     * @return ArrayOfUnitDate
     */
    public function getGetUnitsAvailabilityCalendarResult()
    {
        return $this->getUnitsAvailabilityCalendarResult;
    }

    /**
     * @param ArrayOfUnitDate $getUnitsAvailabilityCalendarResult
     * @return \Gueststream\PMS\IQWare\API\getUnitsAvailabilityCalendarResponse
     */
    public function setGetUnitsAvailabilityCalendarResult($getUnitsAvailabilityCalendarResult)
    {
        $this->getUnitsAvailabilityCalendarResult = $getUnitsAvailabilityCalendarResult;
        return $this;
    }
}

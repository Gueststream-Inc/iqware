<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitsAvailabilityResponse
{

    /**
     * @var ArrayOfUnitDate $GetUnitsAvailabilityResult
     */
    protected $GetUnitsAvailabilityResult = null;

    /**
     * @param ArrayOfUnitDate $GetUnitsAvailabilityResult
     */
    public function __construct($GetUnitsAvailabilityResult)
    {
        $this->GetUnitsAvailabilityResult = $GetUnitsAvailabilityResult;
    }

    /**
     * @return ArrayOfUnitDate
     */
    public function getGetUnitsAvailabilityResult()
    {
        return $this->GetUnitsAvailabilityResult;
    }

    /**
     * @param ArrayOfUnitDate $GetUnitsAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\GetUnitsAvailabilityResponse
     */
    public function setGetUnitsAvailabilityResult($GetUnitsAvailabilityResult)
    {
        $this->GetUnitsAvailabilityResult = $GetUnitsAvailabilityResult;
        return $this;
    }
}

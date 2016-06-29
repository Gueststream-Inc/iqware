<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitWithoutAvailabilityResponse
{

    /**
     * @var ArrayOfUnitAvailable $GetUnitWithoutAvailabilityResult
     */
    protected $GetUnitWithoutAvailabilityResult = null;

    /**
     * @param ArrayOfUnitAvailable $GetUnitWithoutAvailabilityResult
     */
    public function __construct($GetUnitWithoutAvailabilityResult)
    {
        $this->GetUnitWithoutAvailabilityResult = $GetUnitWithoutAvailabilityResult;
    }

    /**
     * @return ArrayOfUnitAvailable
     */
    public function getGetUnitWithoutAvailabilityResult()
    {
        return $this->GetUnitWithoutAvailabilityResult;
    }

    /**
     * @param ArrayOfUnitAvailable $GetUnitWithoutAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\GetUnitWithoutAvailabilityResponse
     */
    public function setGetUnitWithoutAvailabilityResult($GetUnitWithoutAvailabilityResult)
    {
        $this->GetUnitWithoutAvailabilityResult = $GetUnitWithoutAvailabilityResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitAvailabilityResponse
{

    /**
     * @var ArrayOfUnitAvailable $GetUnitAvailabilityResult
     */
    protected $GetUnitAvailabilityResult = null;

    /**
     * @param ArrayOfUnitAvailable $GetUnitAvailabilityResult
     */
    public function __construct($GetUnitAvailabilityResult)
    {
        $this->GetUnitAvailabilityResult = $GetUnitAvailabilityResult;
    }

    /**
     * @return ArrayOfUnitAvailable
     */
    public function getGetUnitAvailabilityResult()
    {
        return $this->GetUnitAvailabilityResult;
    }

    /**
     * @param ArrayOfUnitAvailable $GetUnitAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\GetUnitAvailabilityResponse
     */
    public function setGetUnitAvailabilityResult($GetUnitAvailabilityResult)
    {
        $this->GetUnitAvailabilityResult = $GetUnitAvailabilityResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRS_GetNewAvailabilityResponse
{

    /**
     * @var WSCRS_GetNewAvailabilityResult $WSCRS_GetNewAvailabilityResult
     */
    protected $WSCRS_GetNewAvailabilityResult = null;

    /**
     * @param WSCRS_GetNewAvailabilityResult $WSCRS_GetNewAvailabilityResult
     */
    public function __construct($WSCRS_GetNewAvailabilityResult)
    {
        $this->WSCRS_GetNewAvailabilityResult = $WSCRS_GetNewAvailabilityResult;
    }

    /**
     * @return WSCRS_GetNewAvailabilityResult
     */
    public function getWSCRS_GetNewAvailabilityResult()
    {
        return $this->WSCRS_GetNewAvailabilityResult;
    }

    /**
     * @param WSCRS_GetNewAvailabilityResult $WSCRS_GetNewAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetNewAvailabilityResponse
     */
    public function setWSCRS_GetNewAvailabilityResult($WSCRS_GetNewAvailabilityResult)
    {
        $this->WSCRS_GetNewAvailabilityResult = $WSCRS_GetNewAvailabilityResult;
        return $this;
    }
}

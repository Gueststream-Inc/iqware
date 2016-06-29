<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRS_GetAvailabilityResponse
{

    /**
     * @var WSCRS_GetAvailabilityResult $WSCRS_GetAvailabilityResult
     */
    protected $WSCRS_GetAvailabilityResult = null;

    /**
     * @param WSCRS_GetAvailabilityResult $WSCRS_GetAvailabilityResult
     */
    public function __construct($WSCRS_GetAvailabilityResult)
    {
        $this->WSCRS_GetAvailabilityResult = $WSCRS_GetAvailabilityResult;
    }

    /**
     * @return WSCRS_GetAvailabilityResult
     */
    public function getWSCRS_GetAvailabilityResult()
    {
        return $this->WSCRS_GetAvailabilityResult;
    }

    /**
     * @param WSCRS_GetAvailabilityResult $WSCRS_GetAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetAvailabilityResponse
     */
    public function setWSCRS_GetAvailabilityResult($WSCRS_GetAvailabilityResult)
    {
        $this->WSCRS_GetAvailabilityResult = $WSCRS_GetAvailabilityResult;
        return $this;
    }
}

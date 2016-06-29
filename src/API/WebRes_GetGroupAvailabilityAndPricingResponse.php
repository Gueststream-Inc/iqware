<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupAvailabilityAndPricingResponse
{

    /**
     * @var ArrayOfGroupValues $WebRes_GetGroupAvailabilityAndPricingResult
     */
    protected $WebRes_GetGroupAvailabilityAndPricingResult = null;

    /**
     * @param ArrayOfGroupValues $WebRes_GetGroupAvailabilityAndPricingResult
     */
    public function __construct($WebRes_GetGroupAvailabilityAndPricingResult)
    {
        $this->WebRes_GetGroupAvailabilityAndPricingResult = $WebRes_GetGroupAvailabilityAndPricingResult;
    }

    /**
     * @return ArrayOfGroupValues
     */
    public function getWebRes_GetGroupAvailabilityAndPricingResult()
    {
        return $this->WebRes_GetGroupAvailabilityAndPricingResult;
    }

    /**
     * @param ArrayOfGroupValues $WebRes_GetGroupAvailabilityAndPricingResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupAvailabilityAndPricingResponse
     */
    public function setWebRes_GetGroupAvailabilityAndPricingResult($WebRes_GetGroupAvailabilityAndPricingResult)
    {
        $this->WebRes_GetGroupAvailabilityAndPricingResult = $WebRes_GetGroupAvailabilityAndPricingResult;
        return $this;
    }
}

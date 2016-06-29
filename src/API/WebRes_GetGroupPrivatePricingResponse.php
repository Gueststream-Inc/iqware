<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupPrivatePricingResponse
{

    /**
     * @var WebRes_GetGroupPrivatePricingResult $WebRes_GetGroupPrivatePricingResult
     */
    protected $WebRes_GetGroupPrivatePricingResult = null;

    /**
     * @param WebRes_GetGroupPrivatePricingResult $WebRes_GetGroupPrivatePricingResult
     */
    public function __construct($WebRes_GetGroupPrivatePricingResult)
    {
        $this->WebRes_GetGroupPrivatePricingResult = $WebRes_GetGroupPrivatePricingResult;
    }

    /**
     * @return WebRes_GetGroupPrivatePricingResult
     */
    public function getWebRes_GetGroupPrivatePricingResult()
    {
        return $this->WebRes_GetGroupPrivatePricingResult;
    }

    /**
     * @param WebRes_GetGroupPrivatePricingResult $WebRes_GetGroupPrivatePricingResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupPrivatePricingResponse
     */
    public function setWebRes_GetGroupPrivatePricingResult($WebRes_GetGroupPrivatePricingResult)
    {
        $this->WebRes_GetGroupPrivatePricingResult = $WebRes_GetGroupPrivatePricingResult;
        return $this;
    }
}

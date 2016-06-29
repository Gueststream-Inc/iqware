<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupRegularPricingResponse
{

    /**
     * @var WebRes_GetGroupRegularPricingResult $WebRes_GetGroupRegularPricingResult
     */
    protected $WebRes_GetGroupRegularPricingResult = null;

    /**
     * @param WebRes_GetGroupRegularPricingResult $WebRes_GetGroupRegularPricingResult
     */
    public function __construct($WebRes_GetGroupRegularPricingResult)
    {
        $this->WebRes_GetGroupRegularPricingResult = $WebRes_GetGroupRegularPricingResult;
    }

    /**
     * @return WebRes_GetGroupRegularPricingResult
     */
    public function getWebRes_GetGroupRegularPricingResult()
    {
        return $this->WebRes_GetGroupRegularPricingResult;
    }

    /**
     * @param WebRes_GetGroupRegularPricingResult $WebRes_GetGroupRegularPricingResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupRegularPricingResponse
     */
    public function setWebRes_GetGroupRegularPricingResult($WebRes_GetGroupRegularPricingResult)
    {
        $this->WebRes_GetGroupRegularPricingResult = $WebRes_GetGroupRegularPricingResult;
        return $this;
    }
}

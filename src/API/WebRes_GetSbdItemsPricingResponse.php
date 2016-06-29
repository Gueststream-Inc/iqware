<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetSbdItemsPricingResponse
{

    /**
     * @var WebRes_GetSbdItemsPricingResult $WebRes_GetSbdItemsPricingResult
     */
    protected $WebRes_GetSbdItemsPricingResult = null;

    /**
     * @param WebRes_GetSbdItemsPricingResult $WebRes_GetSbdItemsPricingResult
     */
    public function __construct($WebRes_GetSbdItemsPricingResult)
    {
        $this->WebRes_GetSbdItemsPricingResult = $WebRes_GetSbdItemsPricingResult;
    }

    /**
     * @return WebRes_GetSbdItemsPricingResult
     */
    public function getWebRes_GetSbdItemsPricingResult()
    {
        return $this->WebRes_GetSbdItemsPricingResult;
    }

    /**
     * @param WebRes_GetSbdItemsPricingResult $WebRes_GetSbdItemsPricingResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetSbdItemsPricingResponse
     */
    public function setWebRes_GetSbdItemsPricingResult($WebRes_GetSbdItemsPricingResult)
    {
        $this->WebRes_GetSbdItemsPricingResult = $WebRes_GetSbdItemsPricingResult;
        return $this;
    }
}

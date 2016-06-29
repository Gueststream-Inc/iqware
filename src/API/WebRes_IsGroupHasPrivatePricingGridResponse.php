<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_IsGroupHasPrivatePricingGridResponse
{

    /**
     * @var boolean $WebRes_IsGroupHasPrivatePricingGridResult
     */
    protected $WebRes_IsGroupHasPrivatePricingGridResult = null;

    /**
     * @param boolean $WebRes_IsGroupHasPrivatePricingGridResult
     */
    public function __construct($WebRes_IsGroupHasPrivatePricingGridResult)
    {
        $this->WebRes_IsGroupHasPrivatePricingGridResult = $WebRes_IsGroupHasPrivatePricingGridResult;
    }

    /**
     * @return boolean
     */
    public function getWebRes_IsGroupHasPrivatePricingGridResult()
    {
        return $this->WebRes_IsGroupHasPrivatePricingGridResult;
    }

    /**
     * @param boolean $WebRes_IsGroupHasPrivatePricingGridResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_IsGroupHasPrivatePricingGridResponse
     */
    public function setWebRes_IsGroupHasPrivatePricingGridResult($WebRes_IsGroupHasPrivatePricingGridResult)
    {
        $this->WebRes_IsGroupHasPrivatePricingGridResult = $WebRes_IsGroupHasPrivatePricingGridResult;
        return $this;
    }
}

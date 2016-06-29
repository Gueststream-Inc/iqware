<?php

namespace Gueststream\PMS\IQWare\API;

class GetServiceChargesResponse
{

    /**
     * @var ArrayOfServiceCharge $GetServiceChargesResult
     */
    protected $GetServiceChargesResult = null;

    /**
     * @param ArrayOfServiceCharge $GetServiceChargesResult
     */
    public function __construct($GetServiceChargesResult)
    {
        $this->GetServiceChargesResult = $GetServiceChargesResult;
    }

    /**
     * @return ArrayOfServiceCharge
     */
    public function getGetServiceChargesResult()
    {
        return $this->GetServiceChargesResult;
    }

    /**
     * @param ArrayOfServiceCharge $GetServiceChargesResult
     * @return \Gueststream\PMS\IQWare\API\GetServiceChargesResponse
     */
    public function setGetServiceChargesResult($GetServiceChargesResult)
    {
        $this->GetServiceChargesResult = $GetServiceChargesResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetGooglePMSConfigResponse
{

    /**
     * @var GoogleRates $GetGooglePMSConfigResult
     */
    protected $GetGooglePMSConfigResult = null;

    /**
     * @param GoogleRates $GetGooglePMSConfigResult
     */
    public function __construct($GetGooglePMSConfigResult)
    {
        $this->GetGooglePMSConfigResult = $GetGooglePMSConfigResult;
    }

    /**
     * @return GoogleRates
     */
    public function getGetGooglePMSConfigResult()
    {
        return $this->GetGooglePMSConfigResult;
    }

    /**
     * @param GoogleRates $GetGooglePMSConfigResult
     * @return \Gueststream\PMS\IQWare\API\GetGooglePMSConfigResponse
     */
    public function setGetGooglePMSConfigResult($GetGooglePMSConfigResult)
    {
        $this->GetGooglePMSConfigResult = $GetGooglePMSConfigResult;
        return $this;
    }
}

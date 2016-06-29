<?php

namespace Gueststream\PMS\IQWare\API;

class GetRateReasonsResponse
{

    /**
     * @var ArrayOfRateReason $GetRateReasonsResult
     */
    protected $GetRateReasonsResult = null;

    /**
     * @param ArrayOfRateReason $GetRateReasonsResult
     */
    public function __construct($GetRateReasonsResult)
    {
        $this->GetRateReasonsResult = $GetRateReasonsResult;
    }

    /**
     * @return ArrayOfRateReason
     */
    public function getGetRateReasonsResult()
    {
        return $this->GetRateReasonsResult;
    }

    /**
     * @param ArrayOfRateReason $GetRateReasonsResult
     * @return \Gueststream\PMS\IQWare\API\GetRateReasonsResponse
     */
    public function setGetRateReasonsResult($GetRateReasonsResult)
    {
        $this->GetRateReasonsResult = $GetRateReasonsResult;
        return $this;
    }
}

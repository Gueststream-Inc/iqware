<?php

namespace Gueststream\PMS\IQWare\API;

class GetCreditLimitsResponse
{

    /**
     * @var ArrayOfCreditLimit $GetCreditLimitsResult
     */
    protected $GetCreditLimitsResult = null;

    /**
     * @param ArrayOfCreditLimit $GetCreditLimitsResult
     */
    public function __construct($GetCreditLimitsResult)
    {
        $this->GetCreditLimitsResult = $GetCreditLimitsResult;
    }

    /**
     * @return ArrayOfCreditLimit
     */
    public function getGetCreditLimitsResult()
    {
        return $this->GetCreditLimitsResult;
    }

    /**
     * @param ArrayOfCreditLimit $GetCreditLimitsResult
     * @return \Gueststream\PMS\IQWare\API\GetCreditLimitsResponse
     */
    public function setGetCreditLimitsResult($GetCreditLimitsResult)
    {
        $this->GetCreditLimitsResult = $GetCreditLimitsResult;
        return $this;
    }
}

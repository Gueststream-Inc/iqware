<?php

namespace Gueststream\PMS\IQWare\API;

class GetRequiredDepositForAccountNoResponse
{

    /**
     * @var GetRequiredDepositForAccountNoResult $GetRequiredDepositForAccountNoResult
     */
    protected $GetRequiredDepositForAccountNoResult = null;

    /**
     * @param GetRequiredDepositForAccountNoResult $GetRequiredDepositForAccountNoResult
     */
    public function __construct($GetRequiredDepositForAccountNoResult)
    {
        $this->GetRequiredDepositForAccountNoResult = $GetRequiredDepositForAccountNoResult;
    }

    /**
     * @return GetRequiredDepositForAccountNoResult
     */
    public function getGetRequiredDepositForAccountNoResult()
    {
        return $this->GetRequiredDepositForAccountNoResult;
    }

    /**
     * @param GetRequiredDepositForAccountNoResult $GetRequiredDepositForAccountNoResult
     * @return \Gueststream\PMS\IQWare\API\GetRequiredDepositForAccountNoResponse
     */
    public function setGetRequiredDepositForAccountNoResult($GetRequiredDepositForAccountNoResult)
    {
        $this->GetRequiredDepositForAccountNoResult = $GetRequiredDepositForAccountNoResult;
        return $this;
    }
}

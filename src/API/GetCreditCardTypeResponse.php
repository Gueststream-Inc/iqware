<?php

namespace Gueststream\PMS\IQWare\API;

class GetCreditCardTypeResponse
{

    /**
     * @var int $GetCreditCardTypeResult
     */
    protected $GetCreditCardTypeResult = null;

    /**
     * @param int $GetCreditCardTypeResult
     */
    public function __construct($GetCreditCardTypeResult)
    {
        $this->GetCreditCardTypeResult = $GetCreditCardTypeResult;
    }

    /**
     * @return int
     */
    public function getGetCreditCardTypeResult()
    {
        return $this->GetCreditCardTypeResult;
    }

    /**
     * @param int $GetCreditCardTypeResult
     * @return \Gueststream\PMS\IQWare\API\GetCreditCardTypeResponse
     */
    public function setGetCreditCardTypeResult($GetCreditCardTypeResult)
    {
        $this->GetCreditCardTypeResult = $GetCreditCardTypeResult;
        return $this;
    }
}

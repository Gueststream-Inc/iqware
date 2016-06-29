<?php

namespace Gueststream\PMS\IQWare\API;

class GetCreditCardTypesResponse
{

    /**
     * @var ArrayOfCreditCardTypes $GetCreditCardTypesResult
     */
    protected $GetCreditCardTypesResult = null;

    /**
     * @param ArrayOfCreditCardTypes $GetCreditCardTypesResult
     */
    public function __construct($GetCreditCardTypesResult)
    {
        $this->GetCreditCardTypesResult = $GetCreditCardTypesResult;
    }

    /**
     * @return ArrayOfCreditCardTypes
     */
    public function getGetCreditCardTypesResult()
    {
        return $this->GetCreditCardTypesResult;
    }

    /**
     * @param ArrayOfCreditCardTypes $GetCreditCardTypesResult
     * @return \Gueststream\PMS\IQWare\API\GetCreditCardTypesResponse
     */
    public function setGetCreditCardTypesResult($GetCreditCardTypesResult)
    {
        $this->GetCreditCardTypesResult = $GetCreditCardTypesResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class AddCreditCardToAccountResponse
{

    /**
     * @var string $AddCreditCardToAccountResult
     */
    protected $AddCreditCardToAccountResult = null;

    /**
     * @param string $AddCreditCardToAccountResult
     */
    public function __construct($AddCreditCardToAccountResult)
    {
        $this->AddCreditCardToAccountResult = $AddCreditCardToAccountResult;
    }

    /**
     * @return string
     */
    public function getAddCreditCardToAccountResult()
    {
        return $this->AddCreditCardToAccountResult;
    }

    /**
     * @param string $AddCreditCardToAccountResult
     * @return \Gueststream\PMS\IQWare\API\AddCreditCardToAccountResponse
     */
    public function setAddCreditCardToAccountResult($AddCreditCardToAccountResult)
    {
        $this->AddCreditCardToAccountResult = $AddCreditCardToAccountResult;
        return $this;
    }
}

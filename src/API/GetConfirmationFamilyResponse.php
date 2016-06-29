<?php

namespace Gueststream\PMS\IQWare\API;

class GetConfirmationFamilyResponse
{

    /**
     * @var ArrayOfInt $GetConfirmationFamilyResult
     */
    protected $GetConfirmationFamilyResult = null;

    /**
     * @param ArrayOfInt $GetConfirmationFamilyResult
     */
    public function __construct($GetConfirmationFamilyResult)
    {
        $this->GetConfirmationFamilyResult = $GetConfirmationFamilyResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getGetConfirmationFamilyResult()
    {
        return $this->GetConfirmationFamilyResult;
    }

    /**
     * @param ArrayOfInt $GetConfirmationFamilyResult
     * @return \Gueststream\PMS\IQWare\API\GetConfirmationFamilyResponse
     */
    public function setGetConfirmationFamilyResult($GetConfirmationFamilyResult)
    {
        $this->GetConfirmationFamilyResult = $GetConfirmationFamilyResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetSuitesDescriptionResponse
{

    /**
     * @var GetSuitesDescriptionResult $GetSuitesDescriptionResult
     */
    protected $GetSuitesDescriptionResult = null;

    /**
     * @param GetSuitesDescriptionResult $GetSuitesDescriptionResult
     */
    public function __construct($GetSuitesDescriptionResult)
    {
        $this->GetSuitesDescriptionResult = $GetSuitesDescriptionResult;
    }

    /**
     * @return GetSuitesDescriptionResult
     */
    public function getGetSuitesDescriptionResult()
    {
        return $this->GetSuitesDescriptionResult;
    }

    /**
     * @param GetSuitesDescriptionResult $GetSuitesDescriptionResult
     * @return \Gueststream\PMS\IQWare\API\GetSuitesDescriptionResponse
     */
    public function setGetSuitesDescriptionResult($GetSuitesDescriptionResult)
    {
        $this->GetSuitesDescriptionResult = $GetSuitesDescriptionResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetNationalitiesResponse
{

    /**
     * @var ArrayOfNationality $GetNationalitiesResult
     */
    protected $GetNationalitiesResult = null;

    /**
     * @param ArrayOfNationality $GetNationalitiesResult
     */
    public function __construct($GetNationalitiesResult)
    {
        $this->GetNationalitiesResult = $GetNationalitiesResult;
    }

    /**
     * @return ArrayOfNationality
     */
    public function getGetNationalitiesResult()
    {
        return $this->GetNationalitiesResult;
    }

    /**
     * @param ArrayOfNationality $GetNationalitiesResult
     * @return \Gueststream\PMS\IQWare\API\GetNationalitiesResponse
     */
    public function setGetNationalitiesResult($GetNationalitiesResult)
    {
        $this->GetNationalitiesResult = $GetNationalitiesResult;
        return $this;
    }
}

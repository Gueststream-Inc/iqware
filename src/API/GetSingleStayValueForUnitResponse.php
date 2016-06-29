<?php

namespace Gueststream\PMS\IQWare\API;

class GetSingleStayValueForUnitResponse
{

    /**
     * @var ArrayOfSBDSummary $GetSingleStayValueForUnitResult
     */
    protected $GetSingleStayValueForUnitResult = null;

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueForUnitResult
     */
    public function __construct($GetSingleStayValueForUnitResult)
    {
        $this->GetSingleStayValueForUnitResult = $GetSingleStayValueForUnitResult;
    }

    /**
     * @return ArrayOfSBDSummary
     */
    public function getGetSingleStayValueForUnitResult()
    {
        return $this->GetSingleStayValueForUnitResult;
    }

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueForUnitResult
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueForUnitResponse
     */
    public function setGetSingleStayValueForUnitResult($GetSingleStayValueForUnitResult)
    {
        $this->GetSingleStayValueForUnitResult = $GetSingleStayValueForUnitResult;
        return $this;
    }
}

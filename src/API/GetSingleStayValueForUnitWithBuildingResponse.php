<?php

namespace Gueststream\PMS\IQWare\API;

class GetSingleStayValueForUnitWithBuildingResponse
{

    /**
     * @var ArrayOfSBDSummary $GetSingleStayValueForUnitWithBuildingResult
     */
    protected $GetSingleStayValueForUnitWithBuildingResult = null;

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueForUnitWithBuildingResult
     */
    public function __construct($GetSingleStayValueForUnitWithBuildingResult)
    {
        $this->GetSingleStayValueForUnitWithBuildingResult = $GetSingleStayValueForUnitWithBuildingResult;
    }

    /**
     * @return ArrayOfSBDSummary
     */
    public function getGetSingleStayValueForUnitWithBuildingResult()
    {
        return $this->GetSingleStayValueForUnitWithBuildingResult;
    }

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueForUnitWithBuildingResult
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueForUnitWithBuildingResponse
     */
    public function setGetSingleStayValueForUnitWithBuildingResult($GetSingleStayValueForUnitWithBuildingResult)
    {
        $this->GetSingleStayValueForUnitWithBuildingResult = $GetSingleStayValueForUnitWithBuildingResult;
        return $this;
    }
}

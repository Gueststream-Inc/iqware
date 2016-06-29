<?php

namespace Gueststream\PMS\IQWare\API;

class GetAllBuildingResponse
{

    /**
     * @var GetAllBuildingResult $GetAllBuildingResult
     */
    protected $GetAllBuildingResult = null;

    /**
     * @param GetAllBuildingResult $GetAllBuildingResult
     */
    public function __construct($GetAllBuildingResult)
    {
        $this->GetAllBuildingResult = $GetAllBuildingResult;
    }

    /**
     * @return GetAllBuildingResult
     */
    public function getGetAllBuildingResult()
    {
        return $this->GetAllBuildingResult;
    }

    /**
     * @param GetAllBuildingResult $GetAllBuildingResult
     * @return \Gueststream\PMS\IQWare\API\GetAllBuildingResponse
     */
    public function setGetAllBuildingResult($GetAllBuildingResult)
    {
        $this->GetAllBuildingResult = $GetAllBuildingResult;
        return $this;
    }
}

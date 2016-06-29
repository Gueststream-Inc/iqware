<?php

namespace Gueststream\PMS\IQWare\API;

class GetBuildingsWithAtLeastOneUnitAvailableResponse
{

    /**
     * @var ArrayOfInt $GetBuildingsWithAtLeastOneUnitAvailableResult
     */
    protected $GetBuildingsWithAtLeastOneUnitAvailableResult = null;

    /**
     * @param ArrayOfInt $GetBuildingsWithAtLeastOneUnitAvailableResult
     */
    public function __construct($GetBuildingsWithAtLeastOneUnitAvailableResult)
    {
        $this->GetBuildingsWithAtLeastOneUnitAvailableResult = $GetBuildingsWithAtLeastOneUnitAvailableResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getGetBuildingsWithAtLeastOneUnitAvailableResult()
    {
        return $this->GetBuildingsWithAtLeastOneUnitAvailableResult;
    }

    /**
     * @param ArrayOfInt $GetBuildingsWithAtLeastOneUnitAvailableResult
     * @return \Gueststream\PMS\IQWare\API\GetBuildingsWithAtLeastOneUnitAvailableResponse
     */
    public function setGetBuildingsWithAtLeastOneUnitAvailableResult($GetBuildingsWithAtLeastOneUnitAvailableResult)
    {
        $this->GetBuildingsWithAtLeastOneUnitAvailableResult = $GetBuildingsWithAtLeastOneUnitAvailableResult;
        return $this;
    }
}

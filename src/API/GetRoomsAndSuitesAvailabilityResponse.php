<?php

namespace Gueststream\PMS\IQWare\API;

class GetRoomsAndSuitesAvailabilityResponse
{

    /**
     * @var InventoryResult $GetRoomsAndSuitesAvailabilityResult
     */
    protected $GetRoomsAndSuitesAvailabilityResult = null;

    /**
     * @param InventoryResult $GetRoomsAndSuitesAvailabilityResult
     */
    public function __construct($GetRoomsAndSuitesAvailabilityResult)
    {
        $this->GetRoomsAndSuitesAvailabilityResult = $GetRoomsAndSuitesAvailabilityResult;
    }

    /**
     * @return InventoryResult
     */
    public function getGetRoomsAndSuitesAvailabilityResult()
    {
        return $this->GetRoomsAndSuitesAvailabilityResult;
    }

    /**
     * @param InventoryResult $GetRoomsAndSuitesAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\GetRoomsAndSuitesAvailabilityResponse
     */
    public function setGetRoomsAndSuitesAvailabilityResult($GetRoomsAndSuitesAvailabilityResult)
    {
        $this->GetRoomsAndSuitesAvailabilityResult = $GetRoomsAndSuitesAvailabilityResult;
        return $this;
    }
}

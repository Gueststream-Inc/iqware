<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomsConfigResponse
{

    /**
     * @var ArrayOfRoomTypeBreakdown $GetAvailRatesAndRoomsConfigResult
     */
    protected $GetAvailRatesAndRoomsConfigResult = null;

    /**
     * @param ArrayOfRoomTypeBreakdown $GetAvailRatesAndRoomsConfigResult
     */
    public function __construct($GetAvailRatesAndRoomsConfigResult)
    {
        $this->GetAvailRatesAndRoomsConfigResult = $GetAvailRatesAndRoomsConfigResult;
    }

    /**
     * @return ArrayOfRoomTypeBreakdown
     */
    public function getGetAvailRatesAndRoomsConfigResult()
    {
        return $this->GetAvailRatesAndRoomsConfigResult;
    }

    /**
     * @param ArrayOfRoomTypeBreakdown $GetAvailRatesAndRoomsConfigResult
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfigResponse
     */
    public function setGetAvailRatesAndRoomsConfigResult($GetAvailRatesAndRoomsConfigResult)
    {
        $this->GetAvailRatesAndRoomsConfigResult = $GetAvailRatesAndRoomsConfigResult;
        return $this;
    }
}

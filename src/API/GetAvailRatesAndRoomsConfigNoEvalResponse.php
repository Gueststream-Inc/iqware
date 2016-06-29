<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomsConfigNoEvalResponse
{

    /**
     * @var ArrayOfRoomTypeBreakdown $GetAvailRatesAndRoomsConfigNoEvalResult
     */
    protected $GetAvailRatesAndRoomsConfigNoEvalResult = null;

    /**
     * @param ArrayOfRoomTypeBreakdown $GetAvailRatesAndRoomsConfigNoEvalResult
     */
    public function __construct($GetAvailRatesAndRoomsConfigNoEvalResult)
    {
        $this->GetAvailRatesAndRoomsConfigNoEvalResult = $GetAvailRatesAndRoomsConfigNoEvalResult;
    }

    /**
     * @return ArrayOfRoomTypeBreakdown
     */
    public function getGetAvailRatesAndRoomsConfigNoEvalResult()
    {
        return $this->GetAvailRatesAndRoomsConfigNoEvalResult;
    }

    /**
     * @param ArrayOfRoomTypeBreakdown $GetAvailRatesAndRoomsConfigNoEvalResult
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomsConfigNoEvalResponse
     */
    public function setGetAvailRatesAndRoomsConfigNoEvalResult($GetAvailRatesAndRoomsConfigNoEvalResult)
    {
        $this->GetAvailRatesAndRoomsConfigNoEvalResult = $GetAvailRatesAndRoomsConfigNoEvalResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomNumbersResponse
{

    /**
     * @var ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersResult
     */
    protected $GetAvailRatesAndRoomNumbersResult = null;

    /**
     * @param ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersResult
     */
    public function __construct($GetAvailRatesAndRoomNumbersResult)
    {
        $this->GetAvailRatesAndRoomNumbersResult = $GetAvailRatesAndRoomNumbersResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetAvailRatesAndRoomNumbersResult()
    {
        return $this->GetAvailRatesAndRoomNumbersResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersResult
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersResponse
     */
    public function setGetAvailRatesAndRoomNumbersResult($GetAvailRatesAndRoomNumbersResult)
    {
        $this->GetAvailRatesAndRoomNumbersResult = $GetAvailRatesAndRoomNumbersResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomNumbersWithRefusalsResponse
{

    /**
     * @var ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersWithRefusalsResult
     */
    protected $GetAvailRatesAndRoomNumbersWithRefusalsResult = null;

    /**
     * @param ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersWithRefusalsResult
     */
    public function __construct($GetAvailRatesAndRoomNumbersWithRefusalsResult)
    {
        $this->GetAvailRatesAndRoomNumbersWithRefusalsResult = $GetAvailRatesAndRoomNumbersWithRefusalsResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetAvailRatesAndRoomNumbersWithRefusalsResult()
    {
        return $this->GetAvailRatesAndRoomNumbersWithRefusalsResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersWithRefusalsResult
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithRefusalsResponse
     */
    public function setGetAvailRatesAndRoomNumbersWithRefusalsResult($GetAvailRatesAndRoomNumbersWithRefusalsResult)
    {
        $this->GetAvailRatesAndRoomNumbersWithRefusalsResult = $GetAvailRatesAndRoomNumbersWithRefusalsResult;
        return $this;
    }
}

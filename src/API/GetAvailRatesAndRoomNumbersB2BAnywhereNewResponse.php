<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomNumbersB2BAnywhereNewResponse
{

    /**
     * @var ArrayOfB2BAnywhere $GetAvailRatesAndRoomNumbersB2BAnywhereNewResult
     */
    protected $GetAvailRatesAndRoomNumbersB2BAnywhereNewResult = null;

    /**
     * @param ArrayOfB2BAnywhere $GetAvailRatesAndRoomNumbersB2BAnywhereNewResult
     */
    public function __construct($GetAvailRatesAndRoomNumbersB2BAnywhereNewResult)
    {
        $this->GetAvailRatesAndRoomNumbersB2BAnywhereNewResult = $GetAvailRatesAndRoomNumbersB2BAnywhereNewResult;
    }

    /**
     * @return ArrayOfB2BAnywhere
     */
    public function getGetAvailRatesAndRoomNumbersB2BAnywhereNewResult()
    {
        return $this->GetAvailRatesAndRoomNumbersB2BAnywhereNewResult;
    }

    /**
     * @param ArrayOfB2BAnywhere $GetAvailRatesAndRoomNumbersB2BAnywhereNewResult
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhereNewResponse
     */
    public function setGetAvailRatesAndRoomNumbersB2BAnywhereNewResult($GetAvailRatesAndRoomNumbersB2BAnywhereNewResult)
    {
        $this->GetAvailRatesAndRoomNumbersB2BAnywhereNewResult = $GetAvailRatesAndRoomNumbersB2BAnywhereNewResult;
        return $this;
    }
}

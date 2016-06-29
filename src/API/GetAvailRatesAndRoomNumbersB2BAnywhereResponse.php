<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomNumbersB2BAnywhereResponse
{

    /**
     * @var ArrayOfB2BAnywhere $GetAvailRatesAndRoomNumbersB2BAnywhereResult
     */
    protected $GetAvailRatesAndRoomNumbersB2BAnywhereResult = null;

    /**
     * @param ArrayOfB2BAnywhere $GetAvailRatesAndRoomNumbersB2BAnywhereResult
     */
    public function __construct($GetAvailRatesAndRoomNumbersB2BAnywhereResult)
    {
        $this->GetAvailRatesAndRoomNumbersB2BAnywhereResult = $GetAvailRatesAndRoomNumbersB2BAnywhereResult;
    }

    /**
     * @return ArrayOfB2BAnywhere
     */
    public function getGetAvailRatesAndRoomNumbersB2BAnywhereResult()
    {
        return $this->GetAvailRatesAndRoomNumbersB2BAnywhereResult;
    }

    /**
     * @param ArrayOfB2BAnywhere $GetAvailRatesAndRoomNumbersB2BAnywhereResult
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersB2BAnywhereResponse
     */
    public function setGetAvailRatesAndRoomNumbersB2BAnywhereResult($GetAvailRatesAndRoomNumbersB2BAnywhereResult)
    {
        $this->GetAvailRatesAndRoomNumbersB2BAnywhereResult = $GetAvailRatesAndRoomNumbersB2BAnywhereResult;
        return $this;
    }
}

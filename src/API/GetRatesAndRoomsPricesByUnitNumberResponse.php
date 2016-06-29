<?php

namespace Gueststream\PMS\IQWare\API;

class GetRatesAndRoomsPricesByUnitNumberResponse
{

    /**
     * @var ArrayOfStayValue3 $GetRatesAndRoomsPricesByUnitNumberResult
     */
    protected $GetRatesAndRoomsPricesByUnitNumberResult = null;

    /**
     * @param ArrayOfStayValue3 $GetRatesAndRoomsPricesByUnitNumberResult
     */
    public function __construct($GetRatesAndRoomsPricesByUnitNumberResult)
    {
        $this->GetRatesAndRoomsPricesByUnitNumberResult = $GetRatesAndRoomsPricesByUnitNumberResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetRatesAndRoomsPricesByUnitNumberResult()
    {
        return $this->GetRatesAndRoomsPricesByUnitNumberResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetRatesAndRoomsPricesByUnitNumberResult
     * @return \Gueststream\PMS\IQWare\API\GetRatesAndRoomsPricesByUnitNumberResponse
     */
    public function setGetRatesAndRoomsPricesByUnitNumberResult($GetRatesAndRoomsPricesByUnitNumberResult)
    {
        $this->GetRatesAndRoomsPricesByUnitNumberResult = $GetRatesAndRoomsPricesByUnitNumberResult;
        return $this;
    }
}

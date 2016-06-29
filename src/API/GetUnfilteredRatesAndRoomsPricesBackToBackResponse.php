<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnfilteredRatesAndRoomsPricesBackToBackResponse
{

    /**
     * @var ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesBackToBackResult
     */
    protected $GetUnfilteredRatesAndRoomsPricesBackToBackResult = null;

    /**
     * @param ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesBackToBackResult
     */
    public function __construct($GetUnfilteredRatesAndRoomsPricesBackToBackResult)
    {
        $this->GetUnfilteredRatesAndRoomsPricesBackToBackResult = $GetUnfilteredRatesAndRoomsPricesBackToBackResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetUnfilteredRatesAndRoomsPricesBackToBackResult()
    {
        return $this->GetUnfilteredRatesAndRoomsPricesBackToBackResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPricesBackToBackResponse
     */
    public function setGetUnfilteredRatesAndRoomsPricesBackToBackResult($GetUnfilteredRatesAndRoomsPricesBackToBackResult)
    {
        $this->GetUnfilteredRatesAndRoomsPricesBackToBackResult = $GetUnfilteredRatesAndRoomsPricesBackToBackResult;
        return $this;
    }
}

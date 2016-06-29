<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnfilteredRatesAndRoomsPricesResponse
{

    /**
     * @var ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesResult
     */
    protected $GetUnfilteredRatesAndRoomsPricesResult = null;

    /**
     * @param ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesResult
     */
    public function __construct($GetUnfilteredRatesAndRoomsPricesResult)
    {
        $this->GetUnfilteredRatesAndRoomsPricesResult = $GetUnfilteredRatesAndRoomsPricesResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetUnfilteredRatesAndRoomsPricesResult()
    {
        return $this->GetUnfilteredRatesAndRoomsPricesResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesResult
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPricesResponse
     */
    public function setGetUnfilteredRatesAndRoomsPricesResult($GetUnfilteredRatesAndRoomsPricesResult)
    {
        $this->GetUnfilteredRatesAndRoomsPricesResult = $GetUnfilteredRatesAndRoomsPricesResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetRatesAndRoomsPricesBackToBackResponse
{

    /**
     * @var ArrayOfStayValue3 $GetRatesAndRoomsPricesBackToBackResult
     */
    protected $GetRatesAndRoomsPricesBackToBackResult = null;

    /**
     * @param ArrayOfStayValue3 $GetRatesAndRoomsPricesBackToBackResult
     */
    public function __construct($GetRatesAndRoomsPricesBackToBackResult)
    {
        $this->GetRatesAndRoomsPricesBackToBackResult = $GetRatesAndRoomsPricesBackToBackResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetRatesAndRoomsPricesBackToBackResult()
    {
        return $this->GetRatesAndRoomsPricesBackToBackResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetRatesAndRoomsPricesBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\GetRatesAndRoomsPricesBackToBackResponse
     */
    public function setGetRatesAndRoomsPricesBackToBackResult($GetRatesAndRoomsPricesBackToBackResult)
    {
        $this->GetRatesAndRoomsPricesBackToBackResult = $GetRatesAndRoomsPricesBackToBackResult;
        return $this;
    }
}

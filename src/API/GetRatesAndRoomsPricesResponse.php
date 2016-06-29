<?php

namespace Gueststream\PMS\IQWare\API;

class GetRatesAndRoomsPricesResponse
{

    /**
     * @var ArrayOfStayValue3 $GetRatesAndRoomsPricesResult
     */
    protected $GetRatesAndRoomsPricesResult = null;

    /**
     * @param ArrayOfStayValue3 $GetRatesAndRoomsPricesResult
     */
    public function __construct($GetRatesAndRoomsPricesResult)
    {
        $this->GetRatesAndRoomsPricesResult = $GetRatesAndRoomsPricesResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetRatesAndRoomsPricesResult()
    {
        return $this->GetRatesAndRoomsPricesResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetRatesAndRoomsPricesResult
     * @return \Gueststream\PMS\IQWare\API\GetRatesAndRoomsPricesResponse
     */
    public function setGetRatesAndRoomsPricesResult($GetRatesAndRoomsPricesResult)
    {
        $this->GetRatesAndRoomsPricesResult = $GetRatesAndRoomsPricesResult;
        return $this;
    }
}

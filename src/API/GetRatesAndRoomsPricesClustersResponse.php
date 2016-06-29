<?php

namespace Gueststream\PMS\IQWare\API;

class GetRatesAndRoomsPricesClustersResponse
{

    /**
     * @var ArrayOfStayValue3 $GetRatesAndRoomsPricesClustersResult
     */
    protected $GetRatesAndRoomsPricesClustersResult = null;

    /**
     * @param ArrayOfStayValue3 $GetRatesAndRoomsPricesClustersResult
     */
    public function __construct($GetRatesAndRoomsPricesClustersResult)
    {
        $this->GetRatesAndRoomsPricesClustersResult = $GetRatesAndRoomsPricesClustersResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetRatesAndRoomsPricesClustersResult()
    {
        return $this->GetRatesAndRoomsPricesClustersResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetRatesAndRoomsPricesClustersResult
     * @return \Gueststream\PMS\IQWare\API\GetRatesAndRoomsPricesClustersResponse
     */
    public function setGetRatesAndRoomsPricesClustersResult($GetRatesAndRoomsPricesClustersResult)
    {
        $this->GetRatesAndRoomsPricesClustersResult = $GetRatesAndRoomsPricesClustersResult;
        return $this;
    }
}

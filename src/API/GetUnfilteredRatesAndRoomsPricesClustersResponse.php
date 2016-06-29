<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnfilteredRatesAndRoomsPricesClustersResponse
{

    /**
     * @var ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesClustersResult
     */
    protected $GetUnfilteredRatesAndRoomsPricesClustersResult = null;

    /**
     * @param ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesClustersResult
     */
    public function __construct($GetUnfilteredRatesAndRoomsPricesClustersResult)
    {
        $this->GetUnfilteredRatesAndRoomsPricesClustersResult = $GetUnfilteredRatesAndRoomsPricesClustersResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetUnfilteredRatesAndRoomsPricesClustersResult()
    {
        return $this->GetUnfilteredRatesAndRoomsPricesClustersResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetUnfilteredRatesAndRoomsPricesClustersResult
     * @return \Gueststream\PMS\IQWare\API\GetUnfilteredRatesAndRoomsPricesClustersResponse
     */
    public function setGetUnfilteredRatesAndRoomsPricesClustersResult($GetUnfilteredRatesAndRoomsPricesClustersResult)
    {
        $this->GetUnfilteredRatesAndRoomsPricesClustersResult = $GetUnfilteredRatesAndRoomsPricesClustersResult;
        return $this;
    }
}

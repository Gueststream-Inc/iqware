<?php

namespace Gueststream\PMS\IQWare\API;

class GetSeasonalArrivalAndDepartureTimeResponse
{

    /**
     * @var ArrivalAndDepartureTime $GetSeasonalArrivalAndDepartureTimeResult
     */
    protected $GetSeasonalArrivalAndDepartureTimeResult = null;

    /**
     * @param ArrivalAndDepartureTime $GetSeasonalArrivalAndDepartureTimeResult
     */
    public function __construct($GetSeasonalArrivalAndDepartureTimeResult)
    {
        $this->GetSeasonalArrivalAndDepartureTimeResult = $GetSeasonalArrivalAndDepartureTimeResult;
    }

    /**
     * @return ArrivalAndDepartureTime
     */
    public function getGetSeasonalArrivalAndDepartureTimeResult()
    {
        return $this->GetSeasonalArrivalAndDepartureTimeResult;
    }

    /**
     * @param ArrivalAndDepartureTime $GetSeasonalArrivalAndDepartureTimeResult
     * @return \Gueststream\PMS\IQWare\API\GetSeasonalArrivalAndDepartureTimeResponse
     */
    public function setGetSeasonalArrivalAndDepartureTimeResult($GetSeasonalArrivalAndDepartureTimeResult)
    {
        $this->GetSeasonalArrivalAndDepartureTimeResult = $GetSeasonalArrivalAndDepartureTimeResult;
        return $this;
    }
}

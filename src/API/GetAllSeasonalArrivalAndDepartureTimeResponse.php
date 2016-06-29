<?php

namespace Gueststream\PMS\IQWare\API;

class GetAllSeasonalArrivalAndDepartureTimeResponse
{

    /**
     * @var ArrayOfArrivalAndDepartureTimeSeason $GetAllSeasonalArrivalAndDepartureTimeResult
     */
    protected $GetAllSeasonalArrivalAndDepartureTimeResult = null;

    /**
     * @param ArrayOfArrivalAndDepartureTimeSeason $GetAllSeasonalArrivalAndDepartureTimeResult
     */
    public function __construct($GetAllSeasonalArrivalAndDepartureTimeResult)
    {
        $this->GetAllSeasonalArrivalAndDepartureTimeResult = $GetAllSeasonalArrivalAndDepartureTimeResult;
    }

    /**
     * @return ArrayOfArrivalAndDepartureTimeSeason
     */
    public function getGetAllSeasonalArrivalAndDepartureTimeResult()
    {
        return $this->GetAllSeasonalArrivalAndDepartureTimeResult;
    }

    /**
     * @param ArrayOfArrivalAndDepartureTimeSeason $GetAllSeasonalArrivalAndDepartureTimeResult
     * @return \Gueststream\PMS\IQWare\API\GetAllSeasonalArrivalAndDepartureTimeResponse
     */
    public function setGetAllSeasonalArrivalAndDepartureTimeResult($GetAllSeasonalArrivalAndDepartureTimeResult)
    {
        $this->GetAllSeasonalArrivalAndDepartureTimeResult = $GetAllSeasonalArrivalAndDepartureTimeResult;
        return $this;
    }
}

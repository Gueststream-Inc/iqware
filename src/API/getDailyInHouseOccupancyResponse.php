<?php

namespace Gueststream\PMS\IQWare\API;

class getDailyInHouseOccupancyResponse
{

    /**
     * @var ArrayOfDailyOccupancy $getDailyInHouseOccupancyResult
     */
    protected $getDailyInHouseOccupancyResult = null;

    /**
     * @param ArrayOfDailyOccupancy $getDailyInHouseOccupancyResult
     */
    public function __construct($getDailyInHouseOccupancyResult)
    {
        $this->getDailyInHouseOccupancyResult = $getDailyInHouseOccupancyResult;
    }

    /**
     * @return ArrayOfDailyOccupancy
     */
    public function getGetDailyInHouseOccupancyResult()
    {
        return $this->getDailyInHouseOccupancyResult;
    }

    /**
     * @param ArrayOfDailyOccupancy $getDailyInHouseOccupancyResult
     * @return \Gueststream\PMS\IQWare\API\getDailyInHouseOccupancyResponse
     */
    public function setGetDailyInHouseOccupancyResult($getDailyInHouseOccupancyResult)
    {
        $this->getDailyInHouseOccupancyResult = $getDailyInHouseOccupancyResult;
        return $this;
    }
}

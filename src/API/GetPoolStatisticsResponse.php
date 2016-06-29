<?php

namespace Gueststream\PMS\IQWare\API;

class GetPoolStatisticsResponse
{

    /**
     * @var PoolStatistics $GetPoolStatisticsResult
     */
    protected $GetPoolStatisticsResult = null;

    /**
     * @param PoolStatistics $GetPoolStatisticsResult
     */
    public function __construct($GetPoolStatisticsResult)
    {
        $this->GetPoolStatisticsResult = $GetPoolStatisticsResult;
    }

    /**
     * @return PoolStatistics
     */
    public function getGetPoolStatisticsResult()
    {
        return $this->GetPoolStatisticsResult;
    }

    /**
     * @param PoolStatistics $GetPoolStatisticsResult
     * @return \Gueststream\PMS\IQWare\API\GetPoolStatisticsResponse
     */
    public function setGetPoolStatisticsResult($GetPoolStatisticsResult)
    {
        $this->GetPoolStatisticsResult = $GetPoolStatisticsResult;
        return $this;
    }
}

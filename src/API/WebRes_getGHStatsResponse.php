<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getGHStatsResponse
{

    /**
     * @var WebRes_getGHStatsResult $WebRes_getGHStatsResult
     */
    protected $WebRes_getGHStatsResult = null;

    /**
     * @param WebRes_getGHStatsResult $WebRes_getGHStatsResult
     */
    public function __construct($WebRes_getGHStatsResult)
    {
        $this->WebRes_getGHStatsResult = $WebRes_getGHStatsResult;
    }

    /**
     * @return WebRes_getGHStatsResult
     */
    public function getWebRes_getGHStatsResult()
    {
        return $this->WebRes_getGHStatsResult;
    }

    /**
     * @param WebRes_getGHStatsResult $WebRes_getGHStatsResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getGHStatsResponse
     */
    public function setWebRes_getGHStatsResult($WebRes_getGHStatsResult)
    {
        $this->WebRes_getGHStatsResult = $WebRes_getGHStatsResult;
        return $this;
    }
}

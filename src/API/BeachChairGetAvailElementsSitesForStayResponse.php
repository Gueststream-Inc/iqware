<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairGetAvailElementsSitesForStayResponse
{

    /**
     * @var BeachChairGetAvailElementsSitesForStayResult $BeachChairGetAvailElementsSitesForStayResult
     */
    protected $BeachChairGetAvailElementsSitesForStayResult = null;

    /**
     * @param BeachChairGetAvailElementsSitesForStayResult $BeachChairGetAvailElementsSitesForStayResult
     */
    public function __construct($BeachChairGetAvailElementsSitesForStayResult)
    {
        $this->BeachChairGetAvailElementsSitesForStayResult = $BeachChairGetAvailElementsSitesForStayResult;
    }

    /**
     * @return BeachChairGetAvailElementsSitesForStayResult
     */
    public function getBeachChairGetAvailElementsSitesForStayResult()
    {
        return $this->BeachChairGetAvailElementsSitesForStayResult;
    }

    /**
     * @param BeachChairGetAvailElementsSitesForStayResult $BeachChairGetAvailElementsSitesForStayResult
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetAvailElementsSitesForStayResponse
     */
    public function setBeachChairGetAvailElementsSitesForStayResult($BeachChairGetAvailElementsSitesForStayResult)
    {
        $this->BeachChairGetAvailElementsSitesForStayResult = $BeachChairGetAvailElementsSitesForStayResult;
        return $this;
    }
}

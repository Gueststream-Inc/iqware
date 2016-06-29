<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairGetSingleStayValueResponse
{

    /**
     * @var BeachChairSBDSummary $BeachChairGetSingleStayValueResult
     */
    protected $BeachChairGetSingleStayValueResult = null;

    /**
     * @param BeachChairSBDSummary $BeachChairGetSingleStayValueResult
     */
    public function __construct($BeachChairGetSingleStayValueResult)
    {
        $this->BeachChairGetSingleStayValueResult = $BeachChairGetSingleStayValueResult;
    }

    /**
     * @return BeachChairSBDSummary
     */
    public function getBeachChairGetSingleStayValueResult()
    {
        return $this->BeachChairGetSingleStayValueResult;
    }

    /**
     * @param BeachChairSBDSummary $BeachChairGetSingleStayValueResult
     * @return \Gueststream\PMS\IQWare\API\BeachChairGetSingleStayValueResponse
     */
    public function setBeachChairGetSingleStayValueResult($BeachChairGetSingleStayValueResult)
    {
        $this->BeachChairGetSingleStayValueResult = $BeachChairGetSingleStayValueResult;
        return $this;
    }
}

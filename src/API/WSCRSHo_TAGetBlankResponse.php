<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_TAGetBlankResponse
{

    /**
     * @var cTravelAgentInfos $WSCRSHo_TAGetBlankResult
     */
    protected $WSCRSHo_TAGetBlankResult = null;

    /**
     * @param cTravelAgentInfos $WSCRSHo_TAGetBlankResult
     */
    public function __construct($WSCRSHo_TAGetBlankResult)
    {
        $this->WSCRSHo_TAGetBlankResult = $WSCRSHo_TAGetBlankResult;
    }

    /**
     * @return cTravelAgentInfos
     */
    public function getWSCRSHo_TAGetBlankResult()
    {
        return $this->WSCRSHo_TAGetBlankResult;
    }

    /**
     * @param cTravelAgentInfos $WSCRSHo_TAGetBlankResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TAGetBlankResponse
     */
    public function setWSCRSHo_TAGetBlankResult($WSCRSHo_TAGetBlankResult)
    {
        $this->WSCRSHo_TAGetBlankResult = $WSCRSHo_TAGetBlankResult;
        return $this;
    }
}

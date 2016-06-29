<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_TAGetResponse
{

    /**
     * @var cTravelAgentInfos $WSCRSHo_TAGetResult
     */
    protected $WSCRSHo_TAGetResult = null;

    /**
     * @param cTravelAgentInfos $WSCRSHo_TAGetResult
     */
    public function __construct($WSCRSHo_TAGetResult)
    {
        $this->WSCRSHo_TAGetResult = $WSCRSHo_TAGetResult;
    }

    /**
     * @return cTravelAgentInfos
     */
    public function getWSCRSHo_TAGetResult()
    {
        return $this->WSCRSHo_TAGetResult;
    }

    /**
     * @param cTravelAgentInfos $WSCRSHo_TAGetResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TAGetResponse
     */
    public function setWSCRSHo_TAGetResult($WSCRSHo_TAGetResult)
    {
        $this->WSCRSHo_TAGetResult = $WSCRSHo_TAGetResult;
        return $this;
    }
}

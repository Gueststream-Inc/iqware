<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetTravelAgentResponse
{

    /**
     * @var WebRes_GetTravelAgentResult $WebRes_GetTravelAgentResult
     */
    protected $WebRes_GetTravelAgentResult = null;

    /**
     * @param WebRes_GetTravelAgentResult $WebRes_GetTravelAgentResult
     */
    public function __construct($WebRes_GetTravelAgentResult)
    {
        $this->WebRes_GetTravelAgentResult = $WebRes_GetTravelAgentResult;
    }

    /**
     * @return WebRes_GetTravelAgentResult
     */
    public function getWebRes_GetTravelAgentResult()
    {
        return $this->WebRes_GetTravelAgentResult;
    }

    /**
     * @param WebRes_GetTravelAgentResult $WebRes_GetTravelAgentResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetTravelAgentResponse
     */
    public function setWebRes_GetTravelAgentResult($WebRes_GetTravelAgentResult)
    {
        $this->WebRes_GetTravelAgentResult = $WebRes_GetTravelAgentResult;
        return $this;
    }
}

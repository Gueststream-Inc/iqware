<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupInfosByGroupStringIDResponse
{

    /**
     * @var WebRes_GetGroupInfosByGroupStringIDResult $WebRes_GetGroupInfosByGroupStringIDResult
     */
    protected $WebRes_GetGroupInfosByGroupStringIDResult = null;

    /**
     * @param WebRes_GetGroupInfosByGroupStringIDResult $WebRes_GetGroupInfosByGroupStringIDResult
     */
    public function __construct($WebRes_GetGroupInfosByGroupStringIDResult)
    {
        $this->WebRes_GetGroupInfosByGroupStringIDResult = $WebRes_GetGroupInfosByGroupStringIDResult;
    }

    /**
     * @return WebRes_GetGroupInfosByGroupStringIDResult
     */
    public function getWebRes_GetGroupInfosByGroupStringIDResult()
    {
        return $this->WebRes_GetGroupInfosByGroupStringIDResult;
    }

    /**
     * @param WebRes_GetGroupInfosByGroupStringIDResult $WebRes_GetGroupInfosByGroupStringIDResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupInfosByGroupStringIDResponse
     */
    public function setWebRes_GetGroupInfosByGroupStringIDResult($WebRes_GetGroupInfosByGroupStringIDResult)
    {
        $this->WebRes_GetGroupInfosByGroupStringIDResult = $WebRes_GetGroupInfosByGroupStringIDResult;
        return $this;
    }
}

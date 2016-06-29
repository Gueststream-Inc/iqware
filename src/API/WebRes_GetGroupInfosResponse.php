<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupInfosResponse
{

    /**
     * @var WebRes_GetGroupInfosResult $WebRes_GetGroupInfosResult
     */
    protected $WebRes_GetGroupInfosResult = null;

    /**
     * @param WebRes_GetGroupInfosResult $WebRes_GetGroupInfosResult
     */
    public function __construct($WebRes_GetGroupInfosResult)
    {
        $this->WebRes_GetGroupInfosResult = $WebRes_GetGroupInfosResult;
    }

    /**
     * @return WebRes_GetGroupInfosResult
     */
    public function getWebRes_GetGroupInfosResult()
    {
        return $this->WebRes_GetGroupInfosResult;
    }

    /**
     * @param WebRes_GetGroupInfosResult $WebRes_GetGroupInfosResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupInfosResponse
     */
    public function setWebRes_GetGroupInfosResult($WebRes_GetGroupInfosResult)
    {
        $this->WebRes_GetGroupInfosResult = $WebRes_GetGroupInfosResult;
        return $this;
    }
}

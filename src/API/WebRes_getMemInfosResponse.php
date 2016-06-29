<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getMemInfosResponse
{

    /**
     * @var WebRes_getMemInfosResult $WebRes_getMemInfosResult
     */
    protected $WebRes_getMemInfosResult = null;

    /**
     * @param WebRes_getMemInfosResult $WebRes_getMemInfosResult
     */
    public function __construct($WebRes_getMemInfosResult)
    {
        $this->WebRes_getMemInfosResult = $WebRes_getMemInfosResult;
    }

    /**
     * @return WebRes_getMemInfosResult
     */
    public function getWebRes_getMemInfosResult()
    {
        return $this->WebRes_getMemInfosResult;
    }

    /**
     * @param WebRes_getMemInfosResult $WebRes_getMemInfosResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getMemInfosResponse
     */
    public function setWebRes_getMemInfosResult($WebRes_getMemInfosResult)
    {
        $this->WebRes_getMemInfosResult = $WebRes_getMemInfosResult;
        return $this;
    }
}

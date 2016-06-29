<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getAccountInfosResponse
{

    /**
     * @var WebRes_getAccountInfosResult $WebRes_getAccountInfosResult
     */
    protected $WebRes_getAccountInfosResult = null;

    /**
     * @param WebRes_getAccountInfosResult $WebRes_getAccountInfosResult
     */
    public function __construct($WebRes_getAccountInfosResult)
    {
        $this->WebRes_getAccountInfosResult = $WebRes_getAccountInfosResult;
    }

    /**
     * @return WebRes_getAccountInfosResult
     */
    public function getWebRes_getAccountInfosResult()
    {
        return $this->WebRes_getAccountInfosResult;
    }

    /**
     * @param WebRes_getAccountInfosResult $WebRes_getAccountInfosResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getAccountInfosResponse
     */
    public function setWebRes_getAccountInfosResult($WebRes_getAccountInfosResult)
    {
        $this->WebRes_getAccountInfosResult = $WebRes_getAccountInfosResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_updateAccountInfosResponse
{

    /**
     * @var int $WebRes_updateAccountInfosResult
     */
    protected $WebRes_updateAccountInfosResult = null;

    /**
     * @param int $WebRes_updateAccountInfosResult
     */
    public function __construct($WebRes_updateAccountInfosResult)
    {
        $this->WebRes_updateAccountInfosResult = $WebRes_updateAccountInfosResult;
    }

    /**
     * @return int
     */
    public function getWebRes_updateAccountInfosResult()
    {
        return $this->WebRes_updateAccountInfosResult;
    }

    /**
     * @param int $WebRes_updateAccountInfosResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_updateAccountInfosResponse
     */
    public function setWebRes_updateAccountInfosResult($WebRes_updateAccountInfosResult)
    {
        $this->WebRes_updateAccountInfosResult = $WebRes_updateAccountInfosResult;
        return $this;
    }
}

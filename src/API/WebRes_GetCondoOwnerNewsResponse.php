<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerNewsResponse
{

    /**
     * @var WebRes_GetCondoOwnerNewsResult $WebRes_GetCondoOwnerNewsResult
     */
    protected $WebRes_GetCondoOwnerNewsResult = null;

    /**
     * @param WebRes_GetCondoOwnerNewsResult $WebRes_GetCondoOwnerNewsResult
     */
    public function __construct($WebRes_GetCondoOwnerNewsResult)
    {
        $this->WebRes_GetCondoOwnerNewsResult = $WebRes_GetCondoOwnerNewsResult;
    }

    /**
     * @return WebRes_GetCondoOwnerNewsResult
     */
    public function getWebRes_GetCondoOwnerNewsResult()
    {
        return $this->WebRes_GetCondoOwnerNewsResult;
    }

    /**
     * @param WebRes_GetCondoOwnerNewsResult $WebRes_GetCondoOwnerNewsResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerNewsResponse
     */
    public function setWebRes_GetCondoOwnerNewsResult($WebRes_GetCondoOwnerNewsResult)
    {
        $this->WebRes_GetCondoOwnerNewsResult = $WebRes_GetCondoOwnerNewsResult;
        return $this;
    }
}

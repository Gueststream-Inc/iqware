<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerByReferalResponse
{

    /**
     * @var WebRes_GetCondoOwnerByReferalResult $WebRes_GetCondoOwnerByReferalResult
     */
    protected $WebRes_GetCondoOwnerByReferalResult = null;

    /**
     * @param WebRes_GetCondoOwnerByReferalResult $WebRes_GetCondoOwnerByReferalResult
     */
    public function __construct($WebRes_GetCondoOwnerByReferalResult)
    {
        $this->WebRes_GetCondoOwnerByReferalResult = $WebRes_GetCondoOwnerByReferalResult;
    }

    /**
     * @return WebRes_GetCondoOwnerByReferalResult
     */
    public function getWebRes_GetCondoOwnerByReferalResult()
    {
        return $this->WebRes_GetCondoOwnerByReferalResult;
    }

    /**
     * @param WebRes_GetCondoOwnerByReferalResult $WebRes_GetCondoOwnerByReferalResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerByReferalResponse
     */
    public function setWebRes_GetCondoOwnerByReferalResult($WebRes_GetCondoOwnerByReferalResult)
    {
        $this->WebRes_GetCondoOwnerByReferalResult = $WebRes_GetCondoOwnerByReferalResult;
        return $this;
    }
}

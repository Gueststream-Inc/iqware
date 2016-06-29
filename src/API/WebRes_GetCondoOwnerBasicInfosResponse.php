<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerBasicInfosResponse
{

    /**
     * @var WebRes_GetCondoOwnerBasicInfosResult $WebRes_GetCondoOwnerBasicInfosResult
     */
    protected $WebRes_GetCondoOwnerBasicInfosResult = null;

    /**
     * @param WebRes_GetCondoOwnerBasicInfosResult $WebRes_GetCondoOwnerBasicInfosResult
     */
    public function __construct($WebRes_GetCondoOwnerBasicInfosResult)
    {
        $this->WebRes_GetCondoOwnerBasicInfosResult = $WebRes_GetCondoOwnerBasicInfosResult;
    }

    /**
     * @return WebRes_GetCondoOwnerBasicInfosResult
     */
    public function getWebRes_GetCondoOwnerBasicInfosResult()
    {
        return $this->WebRes_GetCondoOwnerBasicInfosResult;
    }

    /**
     * @param WebRes_GetCondoOwnerBasicInfosResult $WebRes_GetCondoOwnerBasicInfosResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerBasicInfosResponse
     */
    public function setWebRes_GetCondoOwnerBasicInfosResult($WebRes_GetCondoOwnerBasicInfosResult)
    {
        $this->WebRes_GetCondoOwnerBasicInfosResult = $WebRes_GetCondoOwnerBasicInfosResult;
        return $this;
    }
}

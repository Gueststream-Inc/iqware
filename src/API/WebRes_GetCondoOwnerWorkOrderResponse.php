<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerWorkOrderResponse
{

    /**
     * @var WebRes_GetCondoOwnerWorkOrderResult $WebRes_GetCondoOwnerWorkOrderResult
     */
    protected $WebRes_GetCondoOwnerWorkOrderResult = null;

    /**
     * @param WebRes_GetCondoOwnerWorkOrderResult $WebRes_GetCondoOwnerWorkOrderResult
     */
    public function __construct($WebRes_GetCondoOwnerWorkOrderResult)
    {
        $this->WebRes_GetCondoOwnerWorkOrderResult = $WebRes_GetCondoOwnerWorkOrderResult;
    }

    /**
     * @return WebRes_GetCondoOwnerWorkOrderResult
     */
    public function getWebRes_GetCondoOwnerWorkOrderResult()
    {
        return $this->WebRes_GetCondoOwnerWorkOrderResult;
    }

    /**
     * @param WebRes_GetCondoOwnerWorkOrderResult $WebRes_GetCondoOwnerWorkOrderResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerWorkOrderResponse
     */
    public function setWebRes_GetCondoOwnerWorkOrderResult($WebRes_GetCondoOwnerWorkOrderResult)
    {
        $this->WebRes_GetCondoOwnerWorkOrderResult = $WebRes_GetCondoOwnerWorkOrderResult;
        return $this;
    }
}

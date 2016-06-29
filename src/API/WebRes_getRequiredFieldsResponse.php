<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getRequiredFieldsResponse
{

    /**
     * @var WebRes_getRequiredFieldsResult $WebRes_getRequiredFieldsResult
     */
    protected $WebRes_getRequiredFieldsResult = null;

    /**
     * @param WebRes_getRequiredFieldsResult $WebRes_getRequiredFieldsResult
     */
    public function __construct($WebRes_getRequiredFieldsResult)
    {
        $this->WebRes_getRequiredFieldsResult = $WebRes_getRequiredFieldsResult;
    }

    /**
     * @return WebRes_getRequiredFieldsResult
     */
    public function getWebRes_getRequiredFieldsResult()
    {
        return $this->WebRes_getRequiredFieldsResult;
    }

    /**
     * @param WebRes_getRequiredFieldsResult $WebRes_getRequiredFieldsResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRequiredFieldsResponse
     */
    public function setWebRes_getRequiredFieldsResult($WebRes_getRequiredFieldsResult)
    {
        $this->WebRes_getRequiredFieldsResult = $WebRes_getRequiredFieldsResult;
        return $this;
    }
}

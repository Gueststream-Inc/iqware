<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoConfigResponse
{

    /**
     * @var CondoConfig $WebRes_GetCondoConfigResult
     */
    protected $WebRes_GetCondoConfigResult = null;

    /**
     * @param CondoConfig $WebRes_GetCondoConfigResult
     */
    public function __construct($WebRes_GetCondoConfigResult)
    {
        $this->WebRes_GetCondoConfigResult = $WebRes_GetCondoConfigResult;
    }

    /**
     * @return CondoConfig
     */
    public function getWebRes_GetCondoConfigResult()
    {
        return $this->WebRes_GetCondoConfigResult;
    }

    /**
     * @param CondoConfig $WebRes_GetCondoConfigResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoConfigResponse
     */
    public function setWebRes_GetCondoConfigResult($WebRes_GetCondoConfigResult)
    {
        $this->WebRes_GetCondoConfigResult = $WebRes_GetCondoConfigResult;
        return $this;
    }
}

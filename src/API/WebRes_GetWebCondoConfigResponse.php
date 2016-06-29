<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetWebCondoConfigResponse
{

    /**
     * @var WebCondoConfig $WebRes_GetWebCondoConfigResult
     */
    protected $WebRes_GetWebCondoConfigResult = null;

    /**
     * @param WebCondoConfig $WebRes_GetWebCondoConfigResult
     */
    public function __construct($WebRes_GetWebCondoConfigResult)
    {
        $this->WebRes_GetWebCondoConfigResult = $WebRes_GetWebCondoConfigResult;
    }

    /**
     * @return WebCondoConfig
     */
    public function getWebRes_GetWebCondoConfigResult()
    {
        return $this->WebRes_GetWebCondoConfigResult;
    }

    /**
     * @param WebCondoConfig $WebRes_GetWebCondoConfigResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetWebCondoConfigResponse
     */
    public function setWebRes_GetWebCondoConfigResult($WebRes_GetWebCondoConfigResult)
    {
        $this->WebRes_GetWebCondoConfigResult = $WebRes_GetWebCondoConfigResult;
        return $this;
    }
}

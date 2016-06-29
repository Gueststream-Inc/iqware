<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetWebResConfigResponse
{

    /**
     * @var WebResConfig $WebRes_GetWebResConfigResult
     */
    protected $WebRes_GetWebResConfigResult = null;

    /**
     * @param WebResConfig $WebRes_GetWebResConfigResult
     */
    public function __construct($WebRes_GetWebResConfigResult)
    {
        $this->WebRes_GetWebResConfigResult = $WebRes_GetWebResConfigResult;
    }

    /**
     * @return WebResConfig
     */
    public function getWebRes_GetWebResConfigResult()
    {
        return $this->WebRes_GetWebResConfigResult;
    }

    /**
     * @param WebResConfig $WebRes_GetWebResConfigResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetWebResConfigResponse
     */
    public function setWebRes_GetWebResConfigResult($WebRes_GetWebResConfigResult)
    {
        $this->WebRes_GetWebResConfigResult = $WebRes_GetWebResConfigResult;
        return $this;
    }
}

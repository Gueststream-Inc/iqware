<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GlobalAccessLoginResponse
{

    /**
     * @var GlobalAccess $WebRes_GlobalAccessLoginResult
     */
    protected $WebRes_GlobalAccessLoginResult = null;

    /**
     * @param GlobalAccess $WebRes_GlobalAccessLoginResult
     */
    public function __construct($WebRes_GlobalAccessLoginResult)
    {
        $this->WebRes_GlobalAccessLoginResult = $WebRes_GlobalAccessLoginResult;
    }

    /**
     * @return GlobalAccess
     */
    public function getWebRes_GlobalAccessLoginResult()
    {
        return $this->WebRes_GlobalAccessLoginResult;
    }

    /**
     * @param GlobalAccess $WebRes_GlobalAccessLoginResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GlobalAccessLoginResponse
     */
    public function setWebRes_GlobalAccessLoginResult($WebRes_GlobalAccessLoginResult)
    {
        $this->WebRes_GlobalAccessLoginResult = $WebRes_GlobalAccessLoginResult;
        return $this;
    }
}

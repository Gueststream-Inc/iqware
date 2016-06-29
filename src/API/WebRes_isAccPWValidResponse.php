<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_isAccPWValidResponse
{

    /**
     * @var boolean $WebRes_isAccPWValidResult
     */
    protected $WebRes_isAccPWValidResult = null;

    /**
     * @param boolean $WebRes_isAccPWValidResult
     */
    public function __construct($WebRes_isAccPWValidResult)
    {
        $this->WebRes_isAccPWValidResult = $WebRes_isAccPWValidResult;
    }

    /**
     * @return boolean
     */
    public function getWebRes_isAccPWValidResult()
    {
        return $this->WebRes_isAccPWValidResult;
    }

    /**
     * @param boolean $WebRes_isAccPWValidResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_isAccPWValidResponse
     */
    public function setWebRes_isAccPWValidResult($WebRes_isAccPWValidResult)
    {
        $this->WebRes_isAccPWValidResult = $WebRes_isAccPWValidResult;
        return $this;
    }
}

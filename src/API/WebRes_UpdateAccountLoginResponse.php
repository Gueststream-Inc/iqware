<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_UpdateAccountLoginResponse
{

    /**
     * @var UpdateAccountLoginEnum $WebRes_UpdateAccountLoginResult
     */
    protected $WebRes_UpdateAccountLoginResult = null;

    /**
     * @param UpdateAccountLoginEnum $WebRes_UpdateAccountLoginResult
     */
    public function __construct($WebRes_UpdateAccountLoginResult)
    {
        $this->WebRes_UpdateAccountLoginResult = $WebRes_UpdateAccountLoginResult;
    }

    /**
     * @return UpdateAccountLoginEnum
     */
    public function getWebRes_UpdateAccountLoginResult()
    {
        return $this->WebRes_UpdateAccountLoginResult;
    }

    /**
     * @param UpdateAccountLoginEnum $WebRes_UpdateAccountLoginResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateAccountLoginResponse
     */
    public function setWebRes_UpdateAccountLoginResult($WebRes_UpdateAccountLoginResult)
    {
        $this->WebRes_UpdateAccountLoginResult = $WebRes_UpdateAccountLoginResult;
        return $this;
    }
}

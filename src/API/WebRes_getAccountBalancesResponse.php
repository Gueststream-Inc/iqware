<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getAccountBalancesResponse
{

    /**
     * @var WebRes_getAccountBalancesResult $WebRes_getAccountBalancesResult
     */
    protected $WebRes_getAccountBalancesResult = null;

    /**
     * @param WebRes_getAccountBalancesResult $WebRes_getAccountBalancesResult
     */
    public function __construct($WebRes_getAccountBalancesResult)
    {
        $this->WebRes_getAccountBalancesResult = $WebRes_getAccountBalancesResult;
    }

    /**
     * @return WebRes_getAccountBalancesResult
     */
    public function getWebRes_getAccountBalancesResult()
    {
        return $this->WebRes_getAccountBalancesResult;
    }

    /**
     * @param WebRes_getAccountBalancesResult $WebRes_getAccountBalancesResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getAccountBalancesResponse
     */
    public function setWebRes_getAccountBalancesResult($WebRes_getAccountBalancesResult)
    {
        $this->WebRes_getAccountBalancesResult = $WebRes_getAccountBalancesResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getAccountAddressesResponse
{

    /**
     * @var WebRes_getAccountAddressesResult $WebRes_getAccountAddressesResult
     */
    protected $WebRes_getAccountAddressesResult = null;

    /**
     * @param WebRes_getAccountAddressesResult $WebRes_getAccountAddressesResult
     */
    public function __construct($WebRes_getAccountAddressesResult)
    {
        $this->WebRes_getAccountAddressesResult = $WebRes_getAccountAddressesResult;
    }

    /**
     * @return WebRes_getAccountAddressesResult
     */
    public function getWebRes_getAccountAddressesResult()
    {
        return $this->WebRes_getAccountAddressesResult;
    }

    /**
     * @param WebRes_getAccountAddressesResult $WebRes_getAccountAddressesResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getAccountAddressesResponse
     */
    public function setWebRes_getAccountAddressesResult($WebRes_getAccountAddressesResult)
    {
        $this->WebRes_getAccountAddressesResult = $WebRes_getAccountAddressesResult;
        return $this;
    }
}

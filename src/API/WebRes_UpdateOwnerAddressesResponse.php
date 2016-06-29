<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_UpdateOwnerAddressesResponse
{

    /**
     * @var TCondoAddressPhoneMess $WebRes_UpdateOwnerAddressesResult
     */
    protected $WebRes_UpdateOwnerAddressesResult = null;

    /**
     * @param TCondoAddressPhoneMess $WebRes_UpdateOwnerAddressesResult
     */
    public function __construct($WebRes_UpdateOwnerAddressesResult)
    {
        $this->WebRes_UpdateOwnerAddressesResult = $WebRes_UpdateOwnerAddressesResult;
    }

    /**
     * @return TCondoAddressPhoneMess
     */
    public function getWebRes_UpdateOwnerAddressesResult()
    {
        return $this->WebRes_UpdateOwnerAddressesResult;
    }

    /**
     * @param TCondoAddressPhoneMess $WebRes_UpdateOwnerAddressesResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_UpdateOwnerAddressesResponse
     */
    public function setWebRes_UpdateOwnerAddressesResult($WebRes_UpdateOwnerAddressesResult)
    {
        $this->WebRes_UpdateOwnerAddressesResult = $WebRes_UpdateOwnerAddressesResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetRatesAndPricesOwnerGuestResponse
{

    /**
     * @var WebRes_GetRatesAndPricesOwnerGuestResult $WebRes_GetRatesAndPricesOwnerGuestResult
     */
    protected $WebRes_GetRatesAndPricesOwnerGuestResult = null;

    /**
     * @param WebRes_GetRatesAndPricesOwnerGuestResult $WebRes_GetRatesAndPricesOwnerGuestResult
     */
    public function __construct($WebRes_GetRatesAndPricesOwnerGuestResult)
    {
        $this->WebRes_GetRatesAndPricesOwnerGuestResult = $WebRes_GetRatesAndPricesOwnerGuestResult;
    }

    /**
     * @return WebRes_GetRatesAndPricesOwnerGuestResult
     */
    public function getWebRes_GetRatesAndPricesOwnerGuestResult()
    {
        return $this->WebRes_GetRatesAndPricesOwnerGuestResult;
    }

    /**
     * @param WebRes_GetRatesAndPricesOwnerGuestResult $WebRes_GetRatesAndPricesOwnerGuestResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetRatesAndPricesOwnerGuestResponse
     */
    public function setWebRes_GetRatesAndPricesOwnerGuestResult($WebRes_GetRatesAndPricesOwnerGuestResult)
    {
        $this->WebRes_GetRatesAndPricesOwnerGuestResult = $WebRes_GetRatesAndPricesOwnerGuestResult;
        return $this;
    }
}

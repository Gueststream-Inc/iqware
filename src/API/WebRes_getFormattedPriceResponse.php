<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getFormattedPriceResponse
{

    /**
     * @var string $WebRes_getFormattedPriceResult
     */
    protected $WebRes_getFormattedPriceResult = null;

    /**
     * @param string $WebRes_getFormattedPriceResult
     */
    public function __construct($WebRes_getFormattedPriceResult)
    {
        $this->WebRes_getFormattedPriceResult = $WebRes_getFormattedPriceResult;
    }

    /**
     * @return string
     */
    public function getWebRes_getFormattedPriceResult()
    {
        return $this->WebRes_getFormattedPriceResult;
    }

    /**
     * @param string $WebRes_getFormattedPriceResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getFormattedPriceResponse
     */
    public function setWebRes_getFormattedPriceResult($WebRes_getFormattedPriceResult)
    {
        $this->WebRes_getFormattedPriceResult = $WebRes_getFormattedPriceResult;
        return $this;
    }
}

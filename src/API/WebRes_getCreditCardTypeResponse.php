<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getCreditCardTypeResponse
{

    /**
     * @var int $WebRes_getCreditCardTypeResult
     */
    protected $WebRes_getCreditCardTypeResult = null;

    /**
     * @param int $WebRes_getCreditCardTypeResult
     */
    public function __construct($WebRes_getCreditCardTypeResult)
    {
        $this->WebRes_getCreditCardTypeResult = $WebRes_getCreditCardTypeResult;
    }

    /**
     * @return int
     */
    public function getWebRes_getCreditCardTypeResult()
    {
        return $this->WebRes_getCreditCardTypeResult;
    }

    /**
     * @param int $WebRes_getCreditCardTypeResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getCreditCardTypeResponse
     */
    public function setWebRes_getCreditCardTypeResult($WebRes_getCreditCardTypeResult)
    {
        $this->WebRes_getCreditCardTypeResult = $WebRes_getCreditCardTypeResult;
        return $this;
    }
}

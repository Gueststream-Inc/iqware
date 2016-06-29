<?php

namespace Gueststream\PMS\IQWare\API;

class getRateElementsResponse
{

    /**
     * @var getRateElementsResult $getRateElementsResult
     */
    protected $getRateElementsResult = null;

    /**
     * @param getRateElementsResult $getRateElementsResult
     */
    public function __construct($getRateElementsResult)
    {
        $this->getRateElementsResult = $getRateElementsResult;
    }

    /**
     * @return getRateElementsResult
     */
    public function getGetRateElementsResult()
    {
        return $this->getRateElementsResult;
    }

    /**
     * @param getRateElementsResult $getRateElementsResult
     * @return \Gueststream\PMS\IQWare\API\getRateElementsResponse
     */
    public function setGetRateElementsResult($getRateElementsResult)
    {
        $this->getRateElementsResult = $getRateElementsResult;
        return $this;
    }
}

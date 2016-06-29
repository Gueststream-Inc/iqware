<?php

namespace Gueststream\PMS\IQWare\API;

class getRatesResponse
{

    /**
     * @var getRatesResult $getRatesResult
     */
    protected $getRatesResult = null;

    /**
     * @param getRatesResult $getRatesResult
     */
    public function __construct($getRatesResult)
    {
        $this->getRatesResult = $getRatesResult;
    }

    /**
     * @return getRatesResult
     */
    public function getGetRatesResult()
    {
        return $this->getRatesResult;
    }

    /**
     * @param getRatesResult $getRatesResult
     * @return \Gueststream\PMS\IQWare\API\getRatesResponse
     */
    public function setGetRatesResult($getRatesResult)
    {
        $this->getRatesResult = $getRatesResult;
        return $this;
    }
}

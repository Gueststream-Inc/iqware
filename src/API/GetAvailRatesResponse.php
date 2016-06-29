<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesResponse
{

    /**
     * @var ArrayOfStayValue3 $GetAvailRatesResult
     */
    protected $GetAvailRatesResult = null;

    /**
     * @param ArrayOfStayValue3 $GetAvailRatesResult
     */
    public function __construct($GetAvailRatesResult)
    {
        $this->GetAvailRatesResult = $GetAvailRatesResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetAvailRatesResult()
    {
        return $this->GetAvailRatesResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetAvailRatesResult
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesResponse
     */
    public function setGetAvailRatesResult($GetAvailRatesResult)
    {
        $this->GetAvailRatesResult = $GetAvailRatesResult;
        return $this;
    }
}

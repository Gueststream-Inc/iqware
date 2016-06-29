<?php

namespace Gueststream\PMS\IQWare\API;

class getRateRoomsBackToBackResponse
{

    /**
     * @var ArrayOfStayValue $getRateRoomsBackToBackResult
     */
    protected $getRateRoomsBackToBackResult = null;

    /**
     * @param ArrayOfStayValue $getRateRoomsBackToBackResult
     */
    public function __construct($getRateRoomsBackToBackResult)
    {
        $this->getRateRoomsBackToBackResult = $getRateRoomsBackToBackResult;
    }

    /**
     * @return ArrayOfStayValue
     */
    public function getGetRateRoomsBackToBackResult()
    {
        return $this->getRateRoomsBackToBackResult;
    }

    /**
     * @param ArrayOfStayValue $getRateRoomsBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\getRateRoomsBackToBackResponse
     */
    public function setGetRateRoomsBackToBackResult($getRateRoomsBackToBackResult)
    {
        $this->getRateRoomsBackToBackResult = $getRateRoomsBackToBackResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class getRateRoomsResponse
{

    /**
     * @var ArrayOfStayValue $getRateRoomsResult
     */
    protected $getRateRoomsResult = null;

    /**
     * @param ArrayOfStayValue $getRateRoomsResult
     */
    public function __construct($getRateRoomsResult)
    {
        $this->getRateRoomsResult = $getRateRoomsResult;
    }

    /**
     * @return ArrayOfStayValue
     */
    public function getGetRateRoomsResult()
    {
        return $this->getRateRoomsResult;
    }

    /**
     * @param ArrayOfStayValue $getRateRoomsResult
     * @return \Gueststream\PMS\IQWare\API\getRateRoomsResponse
     */
    public function setGetRateRoomsResult($getRateRoomsResult)
    {
        $this->getRateRoomsResult = $getRateRoomsResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class AvailRatesAndRoomsResponse
{

    /**
     * @var string $AvailRatesAndRoomsResult
     */
    protected $AvailRatesAndRoomsResult = null;

    /**
     * @param string $AvailRatesAndRoomsResult
     */
    public function __construct($AvailRatesAndRoomsResult)
    {
        $this->AvailRatesAndRoomsResult = $AvailRatesAndRoomsResult;
    }

    /**
     * @return string
     */
    public function getAvailRatesAndRoomsResult()
    {
        return $this->AvailRatesAndRoomsResult;
    }

    /**
     * @param string $AvailRatesAndRoomsResult
     * @return \Gueststream\PMS\IQWare\API\AvailRatesAndRoomsResponse
     */
    public function setAvailRatesAndRoomsResult($AvailRatesAndRoomsResult)
    {
        $this->AvailRatesAndRoomsResult = $AvailRatesAndRoomsResult;
        return $this;
    }
}

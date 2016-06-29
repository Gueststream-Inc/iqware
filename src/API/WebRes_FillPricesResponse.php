<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_FillPricesResponse
{

    /**
     * @var dstRatesAndRooms $dstRatesAndRooms
     */
    protected $dstRatesAndRooms = null;

    /**
     * @param dstRatesAndRooms $dstRatesAndRooms
     */
    public function __construct($dstRatesAndRooms)
    {
        $this->dstRatesAndRooms = $dstRatesAndRooms;
    }

    /**
     * @return dstRatesAndRooms
     */
    public function getDstRatesAndRooms()
    {
        return $this->dstRatesAndRooms;
    }

    /**
     * @param dstRatesAndRooms $dstRatesAndRooms
     * @return \Gueststream\PMS\IQWare\API\WebRes_FillPricesResponse
     */
    public function setDstRatesAndRooms($dstRatesAndRooms)
    {
        $this->dstRatesAndRooms = $dstRatesAndRooms;
        return $this;
    }
}

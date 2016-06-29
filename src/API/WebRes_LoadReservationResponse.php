<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_LoadReservationResponse
{

    /**
     * @var ReservationRBO $WebRes_LoadReservationResult
     */
    protected $WebRes_LoadReservationResult = null;

    /**
     * @param ReservationRBO $WebRes_LoadReservationResult
     */
    public function __construct($WebRes_LoadReservationResult)
    {
        $this->WebRes_LoadReservationResult = $WebRes_LoadReservationResult;
    }

    /**
     * @return ReservationRBO
     */
    public function getWebRes_LoadReservationResult()
    {
        return $this->WebRes_LoadReservationResult;
    }

    /**
     * @param ReservationRBO $WebRes_LoadReservationResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_LoadReservationResponse
     */
    public function setWebRes_LoadReservationResult($WebRes_LoadReservationResult)
    {
        $this->WebRes_LoadReservationResult = $WebRes_LoadReservationResult;
        return $this;
    }
}

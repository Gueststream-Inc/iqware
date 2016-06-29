<?php

namespace Gueststream\PMS\IQWare\API;

class LoadReservationResponse
{

    /**
     * @var ReservationRBO $LoadReservationResult
     */
    protected $LoadReservationResult = null;

    /**
     * @param ReservationRBO $LoadReservationResult
     */
    public function __construct($LoadReservationResult)
    {
        $this->LoadReservationResult = $LoadReservationResult;
    }

    /**
     * @return ReservationRBO
     */
    public function getLoadReservationResult()
    {
        return $this->LoadReservationResult;
    }

    /**
     * @param ReservationRBO $LoadReservationResult
     * @return \Gueststream\PMS\IQWare\API\LoadReservationResponse
     */
    public function setLoadReservationResult($LoadReservationResult)
    {
        $this->LoadReservationResult = $LoadReservationResult;
        return $this;
    }
}

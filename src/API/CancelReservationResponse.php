<?php

namespace Gueststream\PMS\IQWare\API;

class CancelReservationResponse
{

    /**
     * @var int $CancelReservationResult
     */
    protected $CancelReservationResult = null;

    /**
     * @param int $CancelReservationResult
     */
    public function __construct($CancelReservationResult)
    {
        $this->CancelReservationResult = $CancelReservationResult;
    }

    /**
     * @return int
     */
    public function getCancelReservationResult()
    {
        return $this->CancelReservationResult;
    }

    /**
     * @param int $CancelReservationResult
     * @return \Gueststream\PMS\IQWare\API\CancelReservationResponse
     */
    public function setCancelReservationResult($CancelReservationResult)
    {
        $this->CancelReservationResult = $CancelReservationResult;
        return $this;
    }
}

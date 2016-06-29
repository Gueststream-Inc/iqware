<?php

namespace Gueststream\PMS\IQWare\API;

class UpdateReservationResponse
{

    /**
     * @var UpdateReservationResult $UpdateReservationResult
     */
    protected $UpdateReservationResult = null;

    /**
     * @param UpdateReservationResult $UpdateReservationResult
     */
    public function __construct($UpdateReservationResult)
    {
        $this->UpdateReservationResult = $UpdateReservationResult;
    }

    /**
     * @return UpdateReservationResult
     */
    public function getUpdateReservationResult()
    {
        return $this->UpdateReservationResult;
    }

    /**
     * @param UpdateReservationResult $UpdateReservationResult
     * @return \Gueststream\PMS\IQWare\API\UpdateReservationResponse
     */
    public function setUpdateReservationResult($UpdateReservationResult)
    {
        $this->UpdateReservationResult = $UpdateReservationResult;
        return $this;
    }
}

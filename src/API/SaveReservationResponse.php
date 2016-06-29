<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationResponse
{

    /**
     * @var SaveReservationResult $SaveReservationResult
     */
    protected $SaveReservationResult = null;

    /**
     * @param SaveReservationResult $SaveReservationResult
     */
    public function __construct($SaveReservationResult)
    {
        $this->SaveReservationResult = $SaveReservationResult;
    }

    /**
     * @return SaveReservationResult
     */
    public function getSaveReservationResult()
    {
        return $this->SaveReservationResult;
    }

    /**
     * @param SaveReservationResult $SaveReservationResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationResponse
     */
    public function setSaveReservationResult($SaveReservationResult)
    {
        $this->SaveReservationResult = $SaveReservationResult;
        return $this;
    }
}

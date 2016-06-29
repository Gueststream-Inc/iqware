<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationBackToBackResponse
{

    /**
     * @var SaveReservationBackToBackResult $SaveReservationBackToBackResult
     */
    protected $SaveReservationBackToBackResult = null;

    /**
     * @param SaveReservationBackToBackResult $SaveReservationBackToBackResult
     */
    public function __construct($SaveReservationBackToBackResult)
    {
        $this->SaveReservationBackToBackResult = $SaveReservationBackToBackResult;
    }

    /**
     * @return SaveReservationBackToBackResult
     */
    public function getSaveReservationBackToBackResult()
    {
        return $this->SaveReservationBackToBackResult;
    }

    /**
     * @param SaveReservationBackToBackResult $SaveReservationBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationBackToBackResponse
     */
    public function setSaveReservationBackToBackResult($SaveReservationBackToBackResult)
    {
        $this->SaveReservationBackToBackResult = $SaveReservationBackToBackResult;
        return $this;
    }
}

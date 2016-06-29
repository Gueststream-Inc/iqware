<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithECheckProcessedRBOBackToBackResponse
{

    /**
     * @var SaveReservationWithECheckProcessedRBOBackToBackResult $SaveReservationWithECheckProcessedRBOBackToBackResult
     */
    protected $SaveReservationWithECheckProcessedRBOBackToBackResult = null;

    /**
     * @param SaveReservationWithECheckProcessedRBOBackToBackResult $SaveReservationWithECheckProcessedRBOBackToBackResult
     */
    public function __construct($SaveReservationWithECheckProcessedRBOBackToBackResult)
    {
        $this->SaveReservationWithECheckProcessedRBOBackToBackResult = $SaveReservationWithECheckProcessedRBOBackToBackResult;
    }

    /**
     * @return SaveReservationWithECheckProcessedRBOBackToBackResult
     */
    public function getSaveReservationWithECheckProcessedRBOBackToBackResult()
    {
        return $this->SaveReservationWithECheckProcessedRBOBackToBackResult;
    }

    /**
     * @param SaveReservationWithECheckProcessedRBOBackToBackResult $SaveReservationWithECheckProcessedRBOBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedRBOBackToBackResponse
     */
    public function setSaveReservationWithECheckProcessedRBOBackToBackResult($SaveReservationWithECheckProcessedRBOBackToBackResult)
    {
        $this->SaveReservationWithECheckProcessedRBOBackToBackResult = $SaveReservationWithECheckProcessedRBOBackToBackResult;
        return $this;
    }
}

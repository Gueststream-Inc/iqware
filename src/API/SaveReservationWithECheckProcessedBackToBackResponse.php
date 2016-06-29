<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithECheckProcessedBackToBackResponse
{

    /**
     * @var SaveReservationWithECheckProcessedBackToBackResult $SaveReservationWithECheckProcessedBackToBackResult
     */
    protected $SaveReservationWithECheckProcessedBackToBackResult = null;

    /**
     * @param SaveReservationWithECheckProcessedBackToBackResult $SaveReservationWithECheckProcessedBackToBackResult
     */
    public function __construct($SaveReservationWithECheckProcessedBackToBackResult)
    {
        $this->SaveReservationWithECheckProcessedBackToBackResult = $SaveReservationWithECheckProcessedBackToBackResult;
    }

    /**
     * @return SaveReservationWithECheckProcessedBackToBackResult
     */
    public function getSaveReservationWithECheckProcessedBackToBackResult()
    {
        return $this->SaveReservationWithECheckProcessedBackToBackResult;
    }

    /**
     * @param SaveReservationWithECheckProcessedBackToBackResult $SaveReservationWithECheckProcessedBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedBackToBackResponse
     */
    public function setSaveReservationWithECheckProcessedBackToBackResult($SaveReservationWithECheckProcessedBackToBackResult)
    {
        $this->SaveReservationWithECheckProcessedBackToBackResult = $SaveReservationWithECheckProcessedBackToBackResult;
        return $this;
    }
}

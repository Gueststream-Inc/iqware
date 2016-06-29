<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithCardProcessedRBOBackToBackResponse
{

    /**
     * @var SaveReservationWithCardProcessedRBOBackToBackResult $SaveReservationWithCardProcessedRBOBackToBackResult
     */
    protected $SaveReservationWithCardProcessedRBOBackToBackResult = null;

    /**
     * @param SaveReservationWithCardProcessedRBOBackToBackResult $SaveReservationWithCardProcessedRBOBackToBackResult
     */
    public function __construct($SaveReservationWithCardProcessedRBOBackToBackResult)
    {
        $this->SaveReservationWithCardProcessedRBOBackToBackResult = $SaveReservationWithCardProcessedRBOBackToBackResult;
    }

    /**
     * @return SaveReservationWithCardProcessedRBOBackToBackResult
     */
    public function getSaveReservationWithCardProcessedRBOBackToBackResult()
    {
        return $this->SaveReservationWithCardProcessedRBOBackToBackResult;
    }

    /**
     * @param SaveReservationWithCardProcessedRBOBackToBackResult $SaveReservationWithCardProcessedRBOBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithCardProcessedRBOBackToBackResponse
     */
    public function setSaveReservationWithCardProcessedRBOBackToBackResult($SaveReservationWithCardProcessedRBOBackToBackResult)
    {
        $this->SaveReservationWithCardProcessedRBOBackToBackResult = $SaveReservationWithCardProcessedRBOBackToBackResult;
        return $this;
    }
}

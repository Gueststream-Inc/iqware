<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithPaypalProcessedRBOBackToBackResponse
{

    /**
     * @var SaveReservationWithPaypalProcessedRBOBackToBackResult $SaveReservationWithPaypalProcessedRBOBackToBackResult
     */
    protected $SaveReservationWithPaypalProcessedRBOBackToBackResult = null;

    /**
     * @param SaveReservationWithPaypalProcessedRBOBackToBackResult $SaveReservationWithPaypalProcessedRBOBackToBackResult
     */
    public function __construct($SaveReservationWithPaypalProcessedRBOBackToBackResult)
    {
        $this->SaveReservationWithPaypalProcessedRBOBackToBackResult = $SaveReservationWithPaypalProcessedRBOBackToBackResult;
    }

    /**
     * @return SaveReservationWithPaypalProcessedRBOBackToBackResult
     */
    public function getSaveReservationWithPaypalProcessedRBOBackToBackResult()
    {
        return $this->SaveReservationWithPaypalProcessedRBOBackToBackResult;
    }

    /**
     * @param SaveReservationWithPaypalProcessedRBOBackToBackResult $SaveReservationWithPaypalProcessedRBOBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithPaypalProcessedRBOBackToBackResponse
     */
    public function setSaveReservationWithPaypalProcessedRBOBackToBackResult($SaveReservationWithPaypalProcessedRBOBackToBackResult)
    {
        $this->SaveReservationWithPaypalProcessedRBOBackToBackResult = $SaveReservationWithPaypalProcessedRBOBackToBackResult;
        return $this;
    }
}

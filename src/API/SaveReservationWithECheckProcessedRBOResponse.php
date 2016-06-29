<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithECheckProcessedRBOResponse
{

    /**
     * @var SaveReservationWithECheckProcessedRBOResult $SaveReservationWithECheckProcessedRBOResult
     */
    protected $SaveReservationWithECheckProcessedRBOResult = null;

    /**
     * @param SaveReservationWithECheckProcessedRBOResult $SaveReservationWithECheckProcessedRBOResult
     */
    public function __construct($SaveReservationWithECheckProcessedRBOResult)
    {
        $this->SaveReservationWithECheckProcessedRBOResult = $SaveReservationWithECheckProcessedRBOResult;
    }

    /**
     * @return SaveReservationWithECheckProcessedRBOResult
     */
    public function getSaveReservationWithECheckProcessedRBOResult()
    {
        return $this->SaveReservationWithECheckProcessedRBOResult;
    }

    /**
     * @param SaveReservationWithECheckProcessedRBOResult $SaveReservationWithECheckProcessedRBOResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedRBOResponse
     */
    public function setSaveReservationWithECheckProcessedRBOResult($SaveReservationWithECheckProcessedRBOResult)
    {
        $this->SaveReservationWithECheckProcessedRBOResult = $SaveReservationWithECheckProcessedRBOResult;
        return $this;
    }
}

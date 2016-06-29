<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithECheckProcessedResponse
{

    /**
     * @var SaveReservationWithECheckProcessedResult $SaveReservationWithECheckProcessedResult
     */
    protected $SaveReservationWithECheckProcessedResult = null;

    /**
     * @param SaveReservationWithECheckProcessedResult $SaveReservationWithECheckProcessedResult
     */
    public function __construct($SaveReservationWithECheckProcessedResult)
    {
        $this->SaveReservationWithECheckProcessedResult = $SaveReservationWithECheckProcessedResult;
    }

    /**
     * @return SaveReservationWithECheckProcessedResult
     */
    public function getSaveReservationWithECheckProcessedResult()
    {
        return $this->SaveReservationWithECheckProcessedResult;
    }

    /**
     * @param SaveReservationWithECheckProcessedResult $SaveReservationWithECheckProcessedResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithECheckProcessedResponse
     */
    public function setSaveReservationWithECheckProcessedResult($SaveReservationWithECheckProcessedResult)
    {
        $this->SaveReservationWithECheckProcessedResult = $SaveReservationWithECheckProcessedResult;
        return $this;
    }
}

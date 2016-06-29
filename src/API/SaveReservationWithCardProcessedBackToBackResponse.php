<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithCardProcessedBackToBackResponse
{

    /**
     * @var SaveReservationWithCardProcessedBackToBackResult $SaveReservationWithCardProcessedBackToBackResult
     */
    protected $SaveReservationWithCardProcessedBackToBackResult = null;

    /**
     * @param SaveReservationWithCardProcessedBackToBackResult $SaveReservationWithCardProcessedBackToBackResult
     */
    public function __construct($SaveReservationWithCardProcessedBackToBackResult)
    {
        $this->SaveReservationWithCardProcessedBackToBackResult = $SaveReservationWithCardProcessedBackToBackResult;
    }

    /**
     * @return SaveReservationWithCardProcessedBackToBackResult
     */
    public function getSaveReservationWithCardProcessedBackToBackResult()
    {
        return $this->SaveReservationWithCardProcessedBackToBackResult;
    }

    /**
     * @param SaveReservationWithCardProcessedBackToBackResult $SaveReservationWithCardProcessedBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithCardProcessedBackToBackResponse
     */
    public function setSaveReservationWithCardProcessedBackToBackResult($SaveReservationWithCardProcessedBackToBackResult)
    {
        $this->SaveReservationWithCardProcessedBackToBackResult = $SaveReservationWithCardProcessedBackToBackResult;
        return $this;
    }
}

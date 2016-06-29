<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithCardProcessedRBOResponse
{

    /**
     * @var SaveReservationWithCardProcessedRBOResult $SaveReservationWithCardProcessedRBOResult
     */
    protected $SaveReservationWithCardProcessedRBOResult = null;

    /**
     * @param SaveReservationWithCardProcessedRBOResult $SaveReservationWithCardProcessedRBOResult
     */
    public function __construct($SaveReservationWithCardProcessedRBOResult)
    {
        $this->SaveReservationWithCardProcessedRBOResult = $SaveReservationWithCardProcessedRBOResult;
    }

    /**
     * @return SaveReservationWithCardProcessedRBOResult
     */
    public function getSaveReservationWithCardProcessedRBOResult()
    {
        return $this->SaveReservationWithCardProcessedRBOResult;
    }

    /**
     * @param SaveReservationWithCardProcessedRBOResult $SaveReservationWithCardProcessedRBOResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithCardProcessedRBOResponse
     */
    public function setSaveReservationWithCardProcessedRBOResult($SaveReservationWithCardProcessedRBOResult)
    {
        $this->SaveReservationWithCardProcessedRBOResult = $SaveReservationWithCardProcessedRBOResult;
        return $this;
    }
}

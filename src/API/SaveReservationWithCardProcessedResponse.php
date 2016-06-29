<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithCardProcessedResponse
{

    /**
     * @var SaveReservationWithCardProcessedResult $SaveReservationWithCardProcessedResult
     */
    protected $SaveReservationWithCardProcessedResult = null;

    /**
     * @param SaveReservationWithCardProcessedResult $SaveReservationWithCardProcessedResult
     */
    public function __construct($SaveReservationWithCardProcessedResult)
    {
        $this->SaveReservationWithCardProcessedResult = $SaveReservationWithCardProcessedResult;
    }

    /**
     * @return SaveReservationWithCardProcessedResult
     */
    public function getSaveReservationWithCardProcessedResult()
    {
        return $this->SaveReservationWithCardProcessedResult;
    }

    /**
     * @param SaveReservationWithCardProcessedResult $SaveReservationWithCardProcessedResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithCardProcessedResponse
     */
    public function setSaveReservationWithCardProcessedResult($SaveReservationWithCardProcessedResult)
    {
        $this->SaveReservationWithCardProcessedResult = $SaveReservationWithCardProcessedResult;
        return $this;
    }
}

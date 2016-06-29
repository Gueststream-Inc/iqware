<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithPaypalProcessedBackToBackResponse
{

    /**
     * @var SaveReservationWithPaypalProcessedBackToBackResult $SaveReservationWithPaypalProcessedBackToBackResult
     */
    protected $SaveReservationWithPaypalProcessedBackToBackResult = null;

    /**
     * @param SaveReservationWithPaypalProcessedBackToBackResult $SaveReservationWithPaypalProcessedBackToBackResult
     */
    public function __construct($SaveReservationWithPaypalProcessedBackToBackResult)
    {
        $this->SaveReservationWithPaypalProcessedBackToBackResult = $SaveReservationWithPaypalProcessedBackToBackResult;
    }

    /**
     * @return SaveReservationWithPaypalProcessedBackToBackResult
     */
    public function getSaveReservationWithPaypalProcessedBackToBackResult()
    {
        return $this->SaveReservationWithPaypalProcessedBackToBackResult;
    }

    /**
     * @param SaveReservationWithPaypalProcessedBackToBackResult $SaveReservationWithPaypalProcessedBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithPaypalProcessedBackToBackResponse
     */
    public function setSaveReservationWithPaypalProcessedBackToBackResult($SaveReservationWithPaypalProcessedBackToBackResult)
    {
        $this->SaveReservationWithPaypalProcessedBackToBackResult = $SaveReservationWithPaypalProcessedBackToBackResult;
        return $this;
    }
}

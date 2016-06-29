<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithPaypalProcessedRBOResponse
{

    /**
     * @var SaveReservationWithPaypalProcessedRBOResult $SaveReservationWithPaypalProcessedRBOResult
     */
    protected $SaveReservationWithPaypalProcessedRBOResult = null;

    /**
     * @param SaveReservationWithPaypalProcessedRBOResult $SaveReservationWithPaypalProcessedRBOResult
     */
    public function __construct($SaveReservationWithPaypalProcessedRBOResult)
    {
        $this->SaveReservationWithPaypalProcessedRBOResult = $SaveReservationWithPaypalProcessedRBOResult;
    }

    /**
     * @return SaveReservationWithPaypalProcessedRBOResult
     */
    public function getSaveReservationWithPaypalProcessedRBOResult()
    {
        return $this->SaveReservationWithPaypalProcessedRBOResult;
    }

    /**
     * @param SaveReservationWithPaypalProcessedRBOResult $SaveReservationWithPaypalProcessedRBOResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithPaypalProcessedRBOResponse
     */
    public function setSaveReservationWithPaypalProcessedRBOResult($SaveReservationWithPaypalProcessedRBOResult)
    {
        $this->SaveReservationWithPaypalProcessedRBOResult = $SaveReservationWithPaypalProcessedRBOResult;
        return $this;
    }
}

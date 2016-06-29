<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithPaypalProcessedResponse
{

    /**
     * @var SaveReservationWithPaypalProcessedResult $SaveReservationWithPaypalProcessedResult
     */
    protected $SaveReservationWithPaypalProcessedResult = null;

    /**
     * @param SaveReservationWithPaypalProcessedResult $SaveReservationWithPaypalProcessedResult
     */
    public function __construct($SaveReservationWithPaypalProcessedResult)
    {
        $this->SaveReservationWithPaypalProcessedResult = $SaveReservationWithPaypalProcessedResult;
    }

    /**
     * @return SaveReservationWithPaypalProcessedResult
     */
    public function getSaveReservationWithPaypalProcessedResult()
    {
        return $this->SaveReservationWithPaypalProcessedResult;
    }

    /**
     * @param SaveReservationWithPaypalProcessedResult $SaveReservationWithPaypalProcessedResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithPaypalProcessedResponse
     */
    public function setSaveReservationWithPaypalProcessedResult($SaveReservationWithPaypalProcessedResult)
    {
        $this->SaveReservationWithPaypalProcessedResult = $SaveReservationWithPaypalProcessedResult;
        return $this;
    }
}

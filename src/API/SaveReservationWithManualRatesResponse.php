<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationWithManualRatesResponse
{

    /**
     * @var SaveReservationWithManualRatesResult $SaveReservationWithManualRatesResult
     */
    protected $SaveReservationWithManualRatesResult = null;

    /**
     * @param SaveReservationWithManualRatesResult $SaveReservationWithManualRatesResult
     */
    public function __construct($SaveReservationWithManualRatesResult)
    {
        $this->SaveReservationWithManualRatesResult = $SaveReservationWithManualRatesResult;
    }

    /**
     * @return SaveReservationWithManualRatesResult
     */
    public function getSaveReservationWithManualRatesResult()
    {
        return $this->SaveReservationWithManualRatesResult;
    }

    /**
     * @param SaveReservationWithManualRatesResult $SaveReservationWithManualRatesResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationWithManualRatesResponse
     */
    public function setSaveReservationWithManualRatesResult($SaveReservationWithManualRatesResult)
    {
        $this->SaveReservationWithManualRatesResult = $SaveReservationWithManualRatesResult;
        return $this;
    }
}

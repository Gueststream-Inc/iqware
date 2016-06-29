<?php

namespace Gueststream\PMS\IQWare\API;

class SaveReservationFromGDSResponse
{

    /**
     * @var SaveReservationFromGDSResult $SaveReservationFromGDSResult
     */
    protected $SaveReservationFromGDSResult = null;

    /**
     * @param SaveReservationFromGDSResult $SaveReservationFromGDSResult
     */
    public function __construct($SaveReservationFromGDSResult)
    {
        $this->SaveReservationFromGDSResult = $SaveReservationFromGDSResult;
    }

    /**
     * @return SaveReservationFromGDSResult
     */
    public function getSaveReservationFromGDSResult()
    {
        return $this->SaveReservationFromGDSResult;
    }

    /**
     * @param SaveReservationFromGDSResult $SaveReservationFromGDSResult
     * @return \Gueststream\PMS\IQWare\API\SaveReservationFromGDSResponse
     */
    public function setSaveReservationFromGDSResult($SaveReservationFromGDSResult)
    {
        $this->SaveReservationFromGDSResult = $SaveReservationFromGDSResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairSaveReservationResponse
{

    /**
     * @var BeachChairSaveReservationResult $BeachChairSaveReservationResult
     */
    protected $BeachChairSaveReservationResult = null;

    /**
     * @param BeachChairSaveReservationResult $BeachChairSaveReservationResult
     */
    public function __construct($BeachChairSaveReservationResult)
    {
        $this->BeachChairSaveReservationResult = $BeachChairSaveReservationResult;
    }

    /**
     * @return BeachChairSaveReservationResult
     */
    public function getBeachChairSaveReservationResult()
    {
        return $this->BeachChairSaveReservationResult;
    }

    /**
     * @param BeachChairSaveReservationResult $BeachChairSaveReservationResult
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationResponse
     */
    public function setBeachChairSaveReservationResult($BeachChairSaveReservationResult)
    {
        $this->BeachChairSaveReservationResult = $BeachChairSaveReservationResult;
        return $this;
    }
}

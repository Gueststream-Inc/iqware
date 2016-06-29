<?php

namespace Gueststream\PMS\IQWare\API;

class BeachChairSaveReservationWithCardProcessedResponse
{

    /**
     * @var BeachChairSaveReservationWithCardProcessedResult $BeachChairSaveReservationWithCardProcessedResult
     */
    protected $BeachChairSaveReservationWithCardProcessedResult = null;

    /**
     * @param BeachChairSaveReservationWithCardProcessedResult $BeachChairSaveReservationWithCardProcessedResult
     */
    public function __construct($BeachChairSaveReservationWithCardProcessedResult)
    {
        $this->BeachChairSaveReservationWithCardProcessedResult = $BeachChairSaveReservationWithCardProcessedResult;
    }

    /**
     * @return BeachChairSaveReservationWithCardProcessedResult
     */
    public function getBeachChairSaveReservationWithCardProcessedResult()
    {
        return $this->BeachChairSaveReservationWithCardProcessedResult;
    }

    /**
     * @param BeachChairSaveReservationWithCardProcessedResult $BeachChairSaveReservationWithCardProcessedResult
     * @return \Gueststream\PMS\IQWare\API\BeachChairSaveReservationWithCardProcessedResponse
     */
    public function setBeachChairSaveReservationWithCardProcessedResult($BeachChairSaveReservationWithCardProcessedResult)
    {
        $this->BeachChairSaveReservationWithCardProcessedResult = $BeachChairSaveReservationWithCardProcessedResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_SaveReservationResponse
{

    /**
     * @var WebRes_SaveReservationResult $WebRes_SaveReservationResult
     */
    protected $WebRes_SaveReservationResult = null;

    /**
     * @param WebRes_SaveReservationResult $WebRes_SaveReservationResult
     */
    public function __construct($WebRes_SaveReservationResult)
    {
        $this->WebRes_SaveReservationResult = $WebRes_SaveReservationResult;
    }

    /**
     * @return WebRes_SaveReservationResult
     */
    public function getWebRes_SaveReservationResult()
    {
        return $this->WebRes_SaveReservationResult;
    }

    /**
     * @param WebRes_SaveReservationResult $WebRes_SaveReservationResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_SaveReservationResponse
     */
    public function setWebRes_SaveReservationResult($WebRes_SaveReservationResult)
    {
        $this->WebRes_SaveReservationResult = $WebRes_SaveReservationResult;
        return $this;
    }
}

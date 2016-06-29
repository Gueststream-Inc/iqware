<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_SaveReservationBackToBackResponse
{

    /**
     * @var WebRes_SaveReservationBackToBackResult $WebRes_SaveReservationBackToBackResult
     */
    protected $WebRes_SaveReservationBackToBackResult = null;

    /**
     * @param WebRes_SaveReservationBackToBackResult $WebRes_SaveReservationBackToBackResult
     */
    public function __construct($WebRes_SaveReservationBackToBackResult)
    {
        $this->WebRes_SaveReservationBackToBackResult = $WebRes_SaveReservationBackToBackResult;
    }

    /**
     * @return WebRes_SaveReservationBackToBackResult
     */
    public function getWebRes_SaveReservationBackToBackResult()
    {
        return $this->WebRes_SaveReservationBackToBackResult;
    }

    /**
     * @param WebRes_SaveReservationBackToBackResult $WebRes_SaveReservationBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_SaveReservationBackToBackResponse
     */
    public function setWebRes_SaveReservationBackToBackResult($WebRes_SaveReservationBackToBackResult)
    {
        $this->WebRes_SaveReservationBackToBackResult = $WebRes_SaveReservationBackToBackResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_SaveReservationForRBOResponse
{

    /**
     * @var WebRes_SaveReservationForRBOResult $WebRes_SaveReservationForRBOResult
     */
    protected $WebRes_SaveReservationForRBOResult = null;

    /**
     * @param WebRes_SaveReservationForRBOResult $WebRes_SaveReservationForRBOResult
     */
    public function __construct($WebRes_SaveReservationForRBOResult)
    {
        $this->WebRes_SaveReservationForRBOResult = $WebRes_SaveReservationForRBOResult;
    }

    /**
     * @return WebRes_SaveReservationForRBOResult
     */
    public function getWebRes_SaveReservationForRBOResult()
    {
        return $this->WebRes_SaveReservationForRBOResult;
    }

    /**
     * @param WebRes_SaveReservationForRBOResult $WebRes_SaveReservationForRBOResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_SaveReservationForRBOResponse
     */
    public function setWebRes_SaveReservationForRBOResult($WebRes_SaveReservationForRBOResult)
    {
        $this->WebRes_SaveReservationForRBOResult = $WebRes_SaveReservationForRBOResult;
        return $this;
    }
}

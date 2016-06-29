<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getBookingPlacesResponse
{

    /**
     * @var WebRes_getBookingPlacesResult $WebRes_getBookingPlacesResult
     */
    protected $WebRes_getBookingPlacesResult = null;

    /**
     * @param WebRes_getBookingPlacesResult $WebRes_getBookingPlacesResult
     */
    public function __construct($WebRes_getBookingPlacesResult)
    {
        $this->WebRes_getBookingPlacesResult = $WebRes_getBookingPlacesResult;
    }

    /**
     * @return WebRes_getBookingPlacesResult
     */
    public function getWebRes_getBookingPlacesResult()
    {
        return $this->WebRes_getBookingPlacesResult;
    }

    /**
     * @param WebRes_getBookingPlacesResult $WebRes_getBookingPlacesResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getBookingPlacesResponse
     */
    public function setWebRes_getBookingPlacesResult($WebRes_getBookingPlacesResult)
    {
        $this->WebRes_getBookingPlacesResult = $WebRes_getBookingPlacesResult;
        return $this;
    }
}

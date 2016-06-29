<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetHotelAvailabilityArrayResponse
{

    /**
     * @var WebRes_GetHotelAvailabilityArrayResult $WebRes_GetHotelAvailabilityArrayResult
     */
    protected $WebRes_GetHotelAvailabilityArrayResult = null;

    /**
     * @param WebRes_GetHotelAvailabilityArrayResult $WebRes_GetHotelAvailabilityArrayResult
     */
    public function __construct($WebRes_GetHotelAvailabilityArrayResult)
    {
        $this->WebRes_GetHotelAvailabilityArrayResult = $WebRes_GetHotelAvailabilityArrayResult;
    }

    /**
     * @return WebRes_GetHotelAvailabilityArrayResult
     */
    public function getWebRes_GetHotelAvailabilityArrayResult()
    {
        return $this->WebRes_GetHotelAvailabilityArrayResult;
    }

    /**
     * @param WebRes_GetHotelAvailabilityArrayResult $WebRes_GetHotelAvailabilityArrayResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetHotelAvailabilityArrayResponse
     */
    public function setWebRes_GetHotelAvailabilityArrayResult($WebRes_GetHotelAvailabilityArrayResult)
    {
        $this->WebRes_GetHotelAvailabilityArrayResult = $WebRes_GetHotelAvailabilityArrayResult;
        return $this;
    }
}

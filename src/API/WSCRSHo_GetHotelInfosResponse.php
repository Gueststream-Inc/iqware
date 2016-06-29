<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_GetHotelInfosResponse
{

    /**
     * @var WSCRSHo_GetHotelInfosResult $WSCRSHo_GetHotelInfosResult
     */
    protected $WSCRSHo_GetHotelInfosResult = null;

    /**
     * @param WSCRSHo_GetHotelInfosResult $WSCRSHo_GetHotelInfosResult
     */
    public function __construct($WSCRSHo_GetHotelInfosResult)
    {
        $this->WSCRSHo_GetHotelInfosResult = $WSCRSHo_GetHotelInfosResult;
    }

    /**
     * @return WSCRSHo_GetHotelInfosResult
     */
    public function getWSCRSHo_GetHotelInfosResult()
    {
        return $this->WSCRSHo_GetHotelInfosResult;
    }

    /**
     * @param WSCRSHo_GetHotelInfosResult $WSCRSHo_GetHotelInfosResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_GetHotelInfosResponse
     */
    public function setWSCRSHo_GetHotelInfosResult($WSCRSHo_GetHotelInfosResult)
    {
        $this->WSCRSHo_GetHotelInfosResult = $WSCRSHo_GetHotelInfosResult;
        return $this;
    }
}

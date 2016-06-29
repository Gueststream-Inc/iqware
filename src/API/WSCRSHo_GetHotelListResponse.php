<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_GetHotelListResponse
{

    /**
     * @var WSCRSHo_GetHotelListResult $WSCRSHo_GetHotelListResult
     */
    protected $WSCRSHo_GetHotelListResult = null;

    /**
     * @param WSCRSHo_GetHotelListResult $WSCRSHo_GetHotelListResult
     */
    public function __construct($WSCRSHo_GetHotelListResult)
    {
        $this->WSCRSHo_GetHotelListResult = $WSCRSHo_GetHotelListResult;
    }

    /**
     * @return WSCRSHo_GetHotelListResult
     */
    public function getWSCRSHo_GetHotelListResult()
    {
        return $this->WSCRSHo_GetHotelListResult;
    }

    /**
     * @param WSCRSHo_GetHotelListResult $WSCRSHo_GetHotelListResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_GetHotelListResponse
     */
    public function setWSCRSHo_GetHotelListResult($WSCRSHo_GetHotelListResult)
    {
        $this->WSCRSHo_GetHotelListResult = $WSCRSHo_GetHotelListResult;
        return $this;
    }
}

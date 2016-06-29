<?php

namespace Gueststream\PMS\IQWare\API;

class GDS_GetRatesResponse
{

    /**
     * @var GDS_GetRatesResult $GDS_GetRatesResult
     */
    protected $GDS_GetRatesResult = null;

    /**
     * @param GDS_GetRatesResult $GDS_GetRatesResult
     */
    public function __construct($GDS_GetRatesResult)
    {
        $this->GDS_GetRatesResult = $GDS_GetRatesResult;
    }

    /**
     * @return GDS_GetRatesResult
     */
    public function getGDS_GetRatesResult()
    {
        return $this->GDS_GetRatesResult;
    }

    /**
     * @param GDS_GetRatesResult $GDS_GetRatesResult
     * @return \Gueststream\PMS\IQWare\API\GDS_GetRatesResponse
     */
    public function setGDS_GetRatesResult($GDS_GetRatesResult)
    {
        $this->GDS_GetRatesResult = $GDS_GetRatesResult;
        return $this;
    }
}

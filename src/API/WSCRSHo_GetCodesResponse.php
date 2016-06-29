<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_GetCodesResponse
{

    /**
     * @var WSCRSHo_GetCodesResult $WSCRSHo_GetCodesResult
     */
    protected $WSCRSHo_GetCodesResult = null;

    /**
     * @param WSCRSHo_GetCodesResult $WSCRSHo_GetCodesResult
     */
    public function __construct($WSCRSHo_GetCodesResult)
    {
        $this->WSCRSHo_GetCodesResult = $WSCRSHo_GetCodesResult;
    }

    /**
     * @return WSCRSHo_GetCodesResult
     */
    public function getWSCRSHo_GetCodesResult()
    {
        return $this->WSCRSHo_GetCodesResult;
    }

    /**
     * @param WSCRSHo_GetCodesResult $WSCRSHo_GetCodesResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_GetCodesResponse
     */
    public function setWSCRSHo_GetCodesResult($WSCRSHo_GetCodesResult)
    {
        $this->WSCRSHo_GetCodesResult = $WSCRSHo_GetCodesResult;
        return $this;
    }
}

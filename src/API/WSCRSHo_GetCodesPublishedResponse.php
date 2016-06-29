<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_GetCodesPublishedResponse
{

    /**
     * @var WSCRSHo_GetCodesPublishedResult $WSCRSHo_GetCodesPublishedResult
     */
    protected $WSCRSHo_GetCodesPublishedResult = null;

    /**
     * @param WSCRSHo_GetCodesPublishedResult $WSCRSHo_GetCodesPublishedResult
     */
    public function __construct($WSCRSHo_GetCodesPublishedResult)
    {
        $this->WSCRSHo_GetCodesPublishedResult = $WSCRSHo_GetCodesPublishedResult;
    }

    /**
     * @return WSCRSHo_GetCodesPublishedResult
     */
    public function getWSCRSHo_GetCodesPublishedResult()
    {
        return $this->WSCRSHo_GetCodesPublishedResult;
    }

    /**
     * @param WSCRSHo_GetCodesPublishedResult $WSCRSHo_GetCodesPublishedResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_GetCodesPublishedResponse
     */
    public function setWSCRSHo_GetCodesPublishedResult($WSCRSHo_GetCodesPublishedResult)
    {
        $this->WSCRSHo_GetCodesPublishedResult = $WSCRSHo_GetCodesPublishedResult;
        return $this;
    }
}

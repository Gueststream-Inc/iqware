<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRS_GetCodesPublishedResponse
{

    /**
     * @var WSCRS_GetCodesPublishedResult $WSCRS_GetCodesPublishedResult
     */
    protected $WSCRS_GetCodesPublishedResult = null;

    /**
     * @param WSCRS_GetCodesPublishedResult $WSCRS_GetCodesPublishedResult
     */
    public function __construct($WSCRS_GetCodesPublishedResult)
    {
        $this->WSCRS_GetCodesPublishedResult = $WSCRS_GetCodesPublishedResult;
    }

    /**
     * @return WSCRS_GetCodesPublishedResult
     */
    public function getWSCRS_GetCodesPublishedResult()
    {
        return $this->WSCRS_GetCodesPublishedResult;
    }

    /**
     * @param WSCRS_GetCodesPublishedResult $WSCRS_GetCodesPublishedResult
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetCodesPublishedResponse
     */
    public function setWSCRS_GetCodesPublishedResult($WSCRS_GetCodesPublishedResult)
    {
        $this->WSCRS_GetCodesPublishedResult = $WSCRS_GetCodesPublishedResult;
        return $this;
    }
}

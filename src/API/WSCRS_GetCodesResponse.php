<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRS_GetCodesResponse
{

    /**
     * @var WSCRS_GetCodesResult $WSCRS_GetCodesResult
     */
    protected $WSCRS_GetCodesResult = null;

    /**
     * @param WSCRS_GetCodesResult $WSCRS_GetCodesResult
     */
    public function __construct($WSCRS_GetCodesResult)
    {
        $this->WSCRS_GetCodesResult = $WSCRS_GetCodesResult;
    }

    /**
     * @return WSCRS_GetCodesResult
     */
    public function getWSCRS_GetCodesResult()
    {
        return $this->WSCRS_GetCodesResult;
    }

    /**
     * @param WSCRS_GetCodesResult $WSCRS_GetCodesResult
     * @return \Gueststream\PMS\IQWare\API\WSCRS_GetCodesResponse
     */
    public function setWSCRS_GetCodesResult($WSCRS_GetCodesResult)
    {
        $this->WSCRS_GetCodesResult = $WSCRS_GetCodesResult;
        return $this;
    }
}

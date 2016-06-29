<?php

namespace Gueststream\PMS\IQWare\API;

class GetSingleStayValueBackToBackResponse
{

    /**
     * @var ArrayOfSBDSummary $GetSingleStayValueBackToBackResult
     */
    protected $GetSingleStayValueBackToBackResult = null;

    /**
     * @var string $StrListSpecialOffertNotDefault
     */
    protected $StrListSpecialOffertNotDefault = null;

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueBackToBackResult
     * @param string $StrListSpecialOffertNotDefault
     */
    public function __construct($GetSingleStayValueBackToBackResult, $StrListSpecialOffertNotDefault)
    {
        $this->GetSingleStayValueBackToBackResult = $GetSingleStayValueBackToBackResult;
        $this->StrListSpecialOffertNotDefault = $StrListSpecialOffertNotDefault;
    }

    /**
     * @return ArrayOfSBDSummary
     */
    public function getGetSingleStayValueBackToBackResult()
    {
        return $this->GetSingleStayValueBackToBackResult;
    }

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBackResponse
     */
    public function setGetSingleStayValueBackToBackResult($GetSingleStayValueBackToBackResult)
    {
        $this->GetSingleStayValueBackToBackResult = $GetSingleStayValueBackToBackResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrListSpecialOffertNotDefault()
    {
        return $this->StrListSpecialOffertNotDefault;
    }

    /**
     * @param string $StrListSpecialOffertNotDefault
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueBackToBackResponse
     */
    public function setStrListSpecialOffertNotDefault($StrListSpecialOffertNotDefault)
    {
        $this->StrListSpecialOffertNotDefault = $StrListSpecialOffertNotDefault;
        return $this;
    }
}

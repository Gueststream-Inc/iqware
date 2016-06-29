<?php

namespace Gueststream\PMS\IQWare\API;

class GetSingleStayValueRBOResponse
{

    /**
     * @var ArrayOfSBDSummary $GetSingleStayValueRBOResult
     */
    protected $GetSingleStayValueRBOResult = null;

    /**
     * @var string $StrListSpecialOffertNotDefault
     */
    protected $StrListSpecialOffertNotDefault = null;

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueRBOResult
     * @param string $StrListSpecialOffertNotDefault
     */
    public function __construct($GetSingleStayValueRBOResult, $StrListSpecialOffertNotDefault)
    {
        $this->GetSingleStayValueRBOResult = $GetSingleStayValueRBOResult;
        $this->StrListSpecialOffertNotDefault = $StrListSpecialOffertNotDefault;
    }

    /**
     * @return ArrayOfSBDSummary
     */
    public function getGetSingleStayValueRBOResult()
    {
        return $this->GetSingleStayValueRBOResult;
    }

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueRBOResult
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueRBOResponse
     */
    public function setGetSingleStayValueRBOResult($GetSingleStayValueRBOResult)
    {
        $this->GetSingleStayValueRBOResult = $GetSingleStayValueRBOResult;
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueRBOResponse
     */
    public function setStrListSpecialOffertNotDefault($StrListSpecialOffertNotDefault)
    {
        $this->StrListSpecialOffertNotDefault = $StrListSpecialOffertNotDefault;
        return $this;
    }
}

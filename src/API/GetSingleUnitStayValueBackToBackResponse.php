<?php

namespace Gueststream\PMS\IQWare\API;

class GetSingleUnitStayValueBackToBackResponse
{

    /**
     * @var int $GetSingleUnitStayValueBackToBackResult
     */
    protected $GetSingleUnitStayValueBackToBackResult = null;

    /**
     * @var string $strAdoXmlDailyBreakDown
     */
    protected $strAdoXmlDailyBreakDown = null;

    /**
     * @var string $strXmlSummarySBD
     */
    protected $strXmlSummarySBD = null;

    /**
     * @var string $StrListSpecialOffertNotDefault
     */
    protected $StrListSpecialOffertNotDefault = null;

    /**
     * @param int $GetSingleUnitStayValueBackToBackResult
     * @param string $strAdoXmlDailyBreakDown
     * @param string $strXmlSummarySBD
     * @param string $StrListSpecialOffertNotDefault
     */
    public function __construct($GetSingleUnitStayValueBackToBackResult, $strAdoXmlDailyBreakDown, $strXmlSummarySBD, $StrListSpecialOffertNotDefault)
    {
        $this->GetSingleUnitStayValueBackToBackResult = $GetSingleUnitStayValueBackToBackResult;
        $this->strAdoXmlDailyBreakDown = $strAdoXmlDailyBreakDown;
        $this->strXmlSummarySBD = $strXmlSummarySBD;
        $this->StrListSpecialOffertNotDefault = $StrListSpecialOffertNotDefault;
    }

    /**
     * @return int
     */
    public function getGetSingleUnitStayValueBackToBackResult()
    {
        return $this->GetSingleUnitStayValueBackToBackResult;
    }

    /**
     * @param int $GetSingleUnitStayValueBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\GetSingleUnitStayValueBackToBackResponse
     */
    public function setGetSingleUnitStayValueBackToBackResult($GetSingleUnitStayValueBackToBackResult)
    {
        $this->GetSingleUnitStayValueBackToBackResult = $GetSingleUnitStayValueBackToBackResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrAdoXmlDailyBreakDown()
    {
        return $this->strAdoXmlDailyBreakDown;
    }

    /**
     * @param string $strAdoXmlDailyBreakDown
     * @return \Gueststream\PMS\IQWare\API\GetSingleUnitStayValueBackToBackResponse
     */
    public function setStrAdoXmlDailyBreakDown($strAdoXmlDailyBreakDown)
    {
        $this->strAdoXmlDailyBreakDown = $strAdoXmlDailyBreakDown;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrXmlSummarySBD()
    {
        return $this->strXmlSummarySBD;
    }

    /**
     * @param string $strXmlSummarySBD
     * @return \Gueststream\PMS\IQWare\API\GetSingleUnitStayValueBackToBackResponse
     */
    public function setStrXmlSummarySBD($strXmlSummarySBD)
    {
        $this->strXmlSummarySBD = $strXmlSummarySBD;
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
     * @return \Gueststream\PMS\IQWare\API\GetSingleUnitStayValueBackToBackResponse
     */
    public function setStrListSpecialOffertNotDefault($StrListSpecialOffertNotDefault)
    {
        $this->StrListSpecialOffertNotDefault = $StrListSpecialOffertNotDefault;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_FitMemberGetBlankListResponse
{

    /**
     * @var cFitMemberList $WSCRSHo_FitMemberGetBlankListResult
     */
    protected $WSCRSHo_FitMemberGetBlankListResult = null;

    /**
     * @param cFitMemberList $WSCRSHo_FitMemberGetBlankListResult
     */
    public function __construct($WSCRSHo_FitMemberGetBlankListResult)
    {
        $this->WSCRSHo_FitMemberGetBlankListResult = $WSCRSHo_FitMemberGetBlankListResult;
    }

    /**
     * @return cFitMemberList
     */
    public function getWSCRSHo_FitMemberGetBlankListResult()
    {
        return $this->WSCRSHo_FitMemberGetBlankListResult;
    }

    /**
     * @param cFitMemberList $WSCRSHo_FitMemberGetBlankListResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberGetBlankListResponse
     */
    public function setWSCRSHo_FitMemberGetBlankListResult($WSCRSHo_FitMemberGetBlankListResult)
    {
        $this->WSCRSHo_FitMemberGetBlankListResult = $WSCRSHo_FitMemberGetBlankListResult;
        return $this;
    }
}

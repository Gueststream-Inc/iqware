<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_FitMemberGetListResponse
{

    /**
     * @var cFitMemberList $WSCRSHo_FitMemberGetListResult
     */
    protected $WSCRSHo_FitMemberGetListResult = null;

    /**
     * @param cFitMemberList $WSCRSHo_FitMemberGetListResult
     */
    public function __construct($WSCRSHo_FitMemberGetListResult)
    {
        $this->WSCRSHo_FitMemberGetListResult = $WSCRSHo_FitMemberGetListResult;
    }

    /**
     * @return cFitMemberList
     */
    public function getWSCRSHo_FitMemberGetListResult()
    {
        return $this->WSCRSHo_FitMemberGetListResult;
    }

    /**
     * @param cFitMemberList $WSCRSHo_FitMemberGetListResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberGetListResponse
     */
    public function setWSCRSHo_FitMemberGetListResult($WSCRSHo_FitMemberGetListResult)
    {
        $this->WSCRSHo_FitMemberGetListResult = $WSCRSHo_FitMemberGetListResult;
        return $this;
    }
}

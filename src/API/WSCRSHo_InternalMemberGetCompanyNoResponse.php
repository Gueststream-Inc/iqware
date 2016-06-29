<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_InternalMemberGetCompanyNoResponse
{

    /**
     * @var int $WSCRSHo_InternalMemberGetCompanyNoResult
     */
    protected $WSCRSHo_InternalMemberGetCompanyNoResult = null;

    /**
     * @param int $WSCRSHo_InternalMemberGetCompanyNoResult
     */
    public function __construct($WSCRSHo_InternalMemberGetCompanyNoResult)
    {
        $this->WSCRSHo_InternalMemberGetCompanyNoResult = $WSCRSHo_InternalMemberGetCompanyNoResult;
    }

    /**
     * @return int
     */
    public function getWSCRSHo_InternalMemberGetCompanyNoResult()
    {
        return $this->WSCRSHo_InternalMemberGetCompanyNoResult;
    }

    /**
     * @param int $WSCRSHo_InternalMemberGetCompanyNoResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_InternalMemberGetCompanyNoResponse
     */
    public function setWSCRSHo_InternalMemberGetCompanyNoResult($WSCRSHo_InternalMemberGetCompanyNoResult)
    {
        $this->WSCRSHo_InternalMemberGetCompanyNoResult = $WSCRSHo_InternalMemberGetCompanyNoResult;
        return $this;
    }
}

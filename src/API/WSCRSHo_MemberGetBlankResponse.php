<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_MemberGetBlankResponse
{

    /**
     * @var cMember $WSCRSHo_MemberGetBlankResult
     */
    protected $WSCRSHo_MemberGetBlankResult = null;

    /**
     * @param cMember $WSCRSHo_MemberGetBlankResult
     */
    public function __construct($WSCRSHo_MemberGetBlankResult)
    {
        $this->WSCRSHo_MemberGetBlankResult = $WSCRSHo_MemberGetBlankResult;
    }

    /**
     * @return cMember
     */
    public function getWSCRSHo_MemberGetBlankResult()
    {
        return $this->WSCRSHo_MemberGetBlankResult;
    }

    /**
     * @param cMember $WSCRSHo_MemberGetBlankResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberGetBlankResponse
     */
    public function setWSCRSHo_MemberGetBlankResult($WSCRSHo_MemberGetBlankResult)
    {
        $this->WSCRSHo_MemberGetBlankResult = $WSCRSHo_MemberGetBlankResult;
        return $this;
    }
}

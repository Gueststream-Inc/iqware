<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_MemberGetResponse
{

    /**
     * @var cMember $WSCRSHo_MemberGetResult
     */
    protected $WSCRSHo_MemberGetResult = null;

    /**
     * @param cMember $WSCRSHo_MemberGetResult
     */
    public function __construct($WSCRSHo_MemberGetResult)
    {
        $this->WSCRSHo_MemberGetResult = $WSCRSHo_MemberGetResult;
    }

    /**
     * @return cMember
     */
    public function getWSCRSHo_MemberGetResult()
    {
        return $this->WSCRSHo_MemberGetResult;
    }

    /**
     * @param cMember $WSCRSHo_MemberGetResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberGetResponse
     */
    public function setWSCRSHo_MemberGetResult($WSCRSHo_MemberGetResult)
    {
        $this->WSCRSHo_MemberGetResult = $WSCRSHo_MemberGetResult;
        return $this;
    }
}

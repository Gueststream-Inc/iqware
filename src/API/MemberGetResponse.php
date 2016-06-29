<?php

namespace Gueststream\PMS\IQWare\API;

class MemberGetResponse
{

    /**
     * @var cMember $MemberGetResult
     */
    protected $MemberGetResult = null;

    /**
     * @param cMember $MemberGetResult
     */
    public function __construct($MemberGetResult)
    {
        $this->MemberGetResult = $MemberGetResult;
    }

    /**
     * @return cMember
     */
    public function getMemberGetResult()
    {
        return $this->MemberGetResult;
    }

    /**
     * @param cMember $MemberGetResult
     * @return \Gueststream\PMS\IQWare\API\MemberGetResponse
     */
    public function setMemberGetResult($MemberGetResult)
    {
        $this->MemberGetResult = $MemberGetResult;
        return $this;
    }
}

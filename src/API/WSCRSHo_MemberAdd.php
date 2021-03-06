<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_MemberAdd
{

    /**
     * @var cMember $MemberInfos
     */
    protected $MemberInfos = null;

    /**
     * @param cMember $MemberInfos
     */
    public function __construct($MemberInfos)
    {
        $this->MemberInfos = $MemberInfos;
    }

    /**
     * @return cMember
     */
    public function getMemberInfos()
    {
        return $this->MemberInfos;
    }

    /**
     * @param cMember $MemberInfos
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberAdd
     */
    public function setMemberInfos($MemberInfos)
    {
        $this->MemberInfos = $MemberInfos;
        return $this;
    }
}

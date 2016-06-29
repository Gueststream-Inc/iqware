<?php

namespace Gueststream\PMS\IQWare\API;

class MemberAdd
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var cMember $MemberInfos
     */
    protected $MemberInfos = null;

    /**
     * @param int $GUID
     * @param cMember $MemberInfos
     */
    public function __construct($GUID, $MemberInfos)
    {
        $this->GUID = $GUID;
        $this->MemberInfos = $MemberInfos;
    }

    /**
     * @return int
     */
    public function getGUID()
    {
        return $this->GUID;
    }

    /**
     * @param int $GUID
     * @return \Gueststream\PMS\IQWare\API\MemberAdd
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\MemberAdd
     */
    public function setMemberInfos($MemberInfos)
    {
        $this->MemberInfos = $MemberInfos;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class MemberAddBasic
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var cMemberBasic $MemberInfos
     */
    protected $MemberInfos = null;

    /**
     * @param int $GUID
     * @param cMemberBasic $MemberInfos
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
     * @return \Gueststream\PMS\IQWare\API\MemberAddBasic
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return cMemberBasic
     */
    public function getMemberInfos()
    {
        return $this->MemberInfos;
    }

    /**
     * @param cMemberBasic $MemberInfos
     * @return \Gueststream\PMS\IQWare\API\MemberAddBasic
     */
    public function setMemberInfos($MemberInfos)
    {
        $this->MemberInfos = $MemberInfos;
        return $this;
    }
}

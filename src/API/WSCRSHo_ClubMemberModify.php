<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubMemberModify
{

    /**
     * @var int $GUID
     */
    protected $GUID = null;

    /**
     * @var cClubMember $ClubMember
     */
    protected $ClubMember = null;

    /**
     * @param int $GUID
     * @param cClubMember $ClubMember
     */
    public function __construct($GUID, $ClubMember)
    {
        $this->GUID = $GUID;
        $this->ClubMember = $ClubMember;
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
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberModify
     */
    public function setGUID($GUID)
    {
        $this->GUID = $GUID;
        return $this;
    }

    /**
     * @return cClubMember
     */
    public function getClubMember()
    {
        return $this->ClubMember;
    }

    /**
     * @param cClubMember $ClubMember
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberModify
     */
    public function setClubMember($ClubMember)
    {
        $this->ClubMember = $ClubMember;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubMemberGetResponse
{

    /**
     * @var cClubMember $WSCRSHo_ClubMemberGetResult
     */
    protected $WSCRSHo_ClubMemberGetResult = null;

    /**
     * @param cClubMember $WSCRSHo_ClubMemberGetResult
     */
    public function __construct($WSCRSHo_ClubMemberGetResult)
    {
        $this->WSCRSHo_ClubMemberGetResult = $WSCRSHo_ClubMemberGetResult;
    }

    /**
     * @return cClubMember
     */
    public function getWSCRSHo_ClubMemberGetResult()
    {
        return $this->WSCRSHo_ClubMemberGetResult;
    }

    /**
     * @param cClubMember $WSCRSHo_ClubMemberGetResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberGetResponse
     */
    public function setWSCRSHo_ClubMemberGetResult($WSCRSHo_ClubMemberGetResult)
    {
        $this->WSCRSHo_ClubMemberGetResult = $WSCRSHo_ClubMemberGetResult;
        return $this;
    }
}

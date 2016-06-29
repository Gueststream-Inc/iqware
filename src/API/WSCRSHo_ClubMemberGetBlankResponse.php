<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubMemberGetBlankResponse
{

    /**
     * @var cClubMember $WSCRSHo_ClubMemberGetBlankResult
     */
    protected $WSCRSHo_ClubMemberGetBlankResult = null;

    /**
     * @param cClubMember $WSCRSHo_ClubMemberGetBlankResult
     */
    public function __construct($WSCRSHo_ClubMemberGetBlankResult)
    {
        $this->WSCRSHo_ClubMemberGetBlankResult = $WSCRSHo_ClubMemberGetBlankResult;
    }

    /**
     * @return cClubMember
     */
    public function getWSCRSHo_ClubMemberGetBlankResult()
    {
        return $this->WSCRSHo_ClubMemberGetBlankResult;
    }

    /**
     * @param cClubMember $WSCRSHo_ClubMemberGetBlankResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberGetBlankResponse
     */
    public function setWSCRSHo_ClubMemberGetBlankResult($WSCRSHo_ClubMemberGetBlankResult)
    {
        $this->WSCRSHo_ClubMemberGetBlankResult = $WSCRSHo_ClubMemberGetBlankResult;
        return $this;
    }
}

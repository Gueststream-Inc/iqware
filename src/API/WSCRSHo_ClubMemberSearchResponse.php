<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_ClubMemberSearchResponse
{

    /**
     * @var WSCRSHo_ClubMemberSearchResult $WSCRSHo_ClubMemberSearchResult
     */
    protected $WSCRSHo_ClubMemberSearchResult = null;

    /**
     * @param WSCRSHo_ClubMemberSearchResult $WSCRSHo_ClubMemberSearchResult
     */
    public function __construct($WSCRSHo_ClubMemberSearchResult)
    {
        $this->WSCRSHo_ClubMemberSearchResult = $WSCRSHo_ClubMemberSearchResult;
    }

    /**
     * @return WSCRSHo_ClubMemberSearchResult
     */
    public function getWSCRSHo_ClubMemberSearchResult()
    {
        return $this->WSCRSHo_ClubMemberSearchResult;
    }

    /**
     * @param WSCRSHo_ClubMemberSearchResult $WSCRSHo_ClubMemberSearchResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_ClubMemberSearchResponse
     */
    public function setWSCRSHo_ClubMemberSearchResult($WSCRSHo_ClubMemberSearchResult)
    {
        $this->WSCRSHo_ClubMemberSearchResult = $WSCRSHo_ClubMemberSearchResult;
        return $this;
    }
}

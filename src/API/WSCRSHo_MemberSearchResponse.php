<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_MemberSearchResponse
{

    /**
     * @var WSCRSHo_MemberSearchResult $WSCRSHo_MemberSearchResult
     */
    protected $WSCRSHo_MemberSearchResult = null;

    /**
     * @param WSCRSHo_MemberSearchResult $WSCRSHo_MemberSearchResult
     */
    public function __construct($WSCRSHo_MemberSearchResult)
    {
        $this->WSCRSHo_MemberSearchResult = $WSCRSHo_MemberSearchResult;
    }

    /**
     * @return WSCRSHo_MemberSearchResult
     */
    public function getWSCRSHo_MemberSearchResult()
    {
        return $this->WSCRSHo_MemberSearchResult;
    }

    /**
     * @param WSCRSHo_MemberSearchResult $WSCRSHo_MemberSearchResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_MemberSearchResponse
     */
    public function setWSCRSHo_MemberSearchResult($WSCRSHo_MemberSearchResult)
    {
        $this->WSCRSHo_MemberSearchResult = $WSCRSHo_MemberSearchResult;
        return $this;
    }
}

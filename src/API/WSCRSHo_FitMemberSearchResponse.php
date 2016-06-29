<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_FitMemberSearchResponse
{

    /**
     * @var WSCRSHo_FitMemberSearchResult $WSCRSHo_FitMemberSearchResult
     */
    protected $WSCRSHo_FitMemberSearchResult = null;

    /**
     * @param WSCRSHo_FitMemberSearchResult $WSCRSHo_FitMemberSearchResult
     */
    public function __construct($WSCRSHo_FitMemberSearchResult)
    {
        $this->WSCRSHo_FitMemberSearchResult = $WSCRSHo_FitMemberSearchResult;
    }

    /**
     * @return WSCRSHo_FitMemberSearchResult
     */
    public function getWSCRSHo_FitMemberSearchResult()
    {
        return $this->WSCRSHo_FitMemberSearchResult;
    }

    /**
     * @param WSCRSHo_FitMemberSearchResult $WSCRSHo_FitMemberSearchResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitMemberSearchResponse
     */
    public function setWSCRSHo_FitMemberSearchResult($WSCRSHo_FitMemberSearchResult)
    {
        $this->WSCRSHo_FitMemberSearchResult = $WSCRSHo_FitMemberSearchResult;
        return $this;
    }
}

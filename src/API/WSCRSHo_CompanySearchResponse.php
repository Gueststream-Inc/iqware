<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_CompanySearchResponse
{

    /**
     * @var WSCRSHo_CompanySearchResult $WSCRSHo_CompanySearchResult
     */
    protected $WSCRSHo_CompanySearchResult = null;

    /**
     * @param WSCRSHo_CompanySearchResult $WSCRSHo_CompanySearchResult
     */
    public function __construct($WSCRSHo_CompanySearchResult)
    {
        $this->WSCRSHo_CompanySearchResult = $WSCRSHo_CompanySearchResult;
    }

    /**
     * @return WSCRSHo_CompanySearchResult
     */
    public function getWSCRSHo_CompanySearchResult()
    {
        return $this->WSCRSHo_CompanySearchResult;
    }

    /**
     * @param WSCRSHo_CompanySearchResult $WSCRSHo_CompanySearchResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanySearchResponse
     */
    public function setWSCRSHo_CompanySearchResult($WSCRSHo_CompanySearchResult)
    {
        $this->WSCRSHo_CompanySearchResult = $WSCRSHo_CompanySearchResult;
        return $this;
    }
}

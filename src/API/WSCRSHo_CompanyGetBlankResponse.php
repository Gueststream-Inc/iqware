<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_CompanyGetBlankResponse
{

    /**
     * @var cCompany $WSCRSHo_CompanyGetBlankResult
     */
    protected $WSCRSHo_CompanyGetBlankResult = null;

    /**
     * @param cCompany $WSCRSHo_CompanyGetBlankResult
     */
    public function __construct($WSCRSHo_CompanyGetBlankResult)
    {
        $this->WSCRSHo_CompanyGetBlankResult = $WSCRSHo_CompanyGetBlankResult;
    }

    /**
     * @return cCompany
     */
    public function getWSCRSHo_CompanyGetBlankResult()
    {
        return $this->WSCRSHo_CompanyGetBlankResult;
    }

    /**
     * @param cCompany $WSCRSHo_CompanyGetBlankResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanyGetBlankResponse
     */
    public function setWSCRSHo_CompanyGetBlankResult($WSCRSHo_CompanyGetBlankResult)
    {
        $this->WSCRSHo_CompanyGetBlankResult = $WSCRSHo_CompanyGetBlankResult;
        return $this;
    }
}

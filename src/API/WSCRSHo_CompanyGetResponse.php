<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_CompanyGetResponse
{

    /**
     * @var cCompany $WSCRSHo_CompanyGetResult
     */
    protected $WSCRSHo_CompanyGetResult = null;

    /**
     * @param cCompany $WSCRSHo_CompanyGetResult
     */
    public function __construct($WSCRSHo_CompanyGetResult)
    {
        $this->WSCRSHo_CompanyGetResult = $WSCRSHo_CompanyGetResult;
    }

    /**
     * @return cCompany
     */
    public function getWSCRSHo_CompanyGetResult()
    {
        return $this->WSCRSHo_CompanyGetResult;
    }

    /**
     * @param cCompany $WSCRSHo_CompanyGetResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanyGetResponse
     */
    public function setWSCRSHo_CompanyGetResult($WSCRSHo_CompanyGetResult)
    {
        $this->WSCRSHo_CompanyGetResult = $WSCRSHo_CompanyGetResult;
        return $this;
    }
}

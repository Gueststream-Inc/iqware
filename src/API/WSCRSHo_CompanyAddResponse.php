<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_CompanyAddResponse
{

    /**
     * @var int $WSCRSHo_CompanyAddResult
     */
    protected $WSCRSHo_CompanyAddResult = null;

    /**
     * @param int $WSCRSHo_CompanyAddResult
     */
    public function __construct($WSCRSHo_CompanyAddResult)
    {
        $this->WSCRSHo_CompanyAddResult = $WSCRSHo_CompanyAddResult;
    }

    /**
     * @return int
     */
    public function getWSCRSHo_CompanyAddResult()
    {
        return $this->WSCRSHo_CompanyAddResult;
    }

    /**
     * @param int $WSCRSHo_CompanyAddResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_CompanyAddResponse
     */
    public function setWSCRSHo_CompanyAddResult($WSCRSHo_CompanyAddResult)
    {
        $this->WSCRSHo_CompanyAddResult = $WSCRSHo_CompanyAddResult;
        return $this;
    }
}

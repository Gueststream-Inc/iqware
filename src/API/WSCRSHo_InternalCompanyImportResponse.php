<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_InternalCompanyImportResponse
{

    /**
     * @var WSCRSHo_InternalCompanyImportResult $WSCRSHo_InternalCompanyImportResult
     */
    protected $WSCRSHo_InternalCompanyImportResult = null;

    /**
     * @param WSCRSHo_InternalCompanyImportResult $WSCRSHo_InternalCompanyImportResult
     */
    public function __construct($WSCRSHo_InternalCompanyImportResult)
    {
        $this->WSCRSHo_InternalCompanyImportResult = $WSCRSHo_InternalCompanyImportResult;
    }

    /**
     * @return WSCRSHo_InternalCompanyImportResult
     */
    public function getWSCRSHo_InternalCompanyImportResult()
    {
        return $this->WSCRSHo_InternalCompanyImportResult;
    }

    /**
     * @param WSCRSHo_InternalCompanyImportResult $WSCRSHo_InternalCompanyImportResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_InternalCompanyImportResponse
     */
    public function setWSCRSHo_InternalCompanyImportResult($WSCRSHo_InternalCompanyImportResult)
    {
        $this->WSCRSHo_InternalCompanyImportResult = $WSCRSHo_InternalCompanyImportResult;
        return $this;
    }
}

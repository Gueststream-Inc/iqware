<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_InternalMemberImportResponse
{

    /**
     * @var WSCRSHo_InternalMemberImportResult $WSCRSHo_InternalMemberImportResult
     */
    protected $WSCRSHo_InternalMemberImportResult = null;

    /**
     * @param WSCRSHo_InternalMemberImportResult $WSCRSHo_InternalMemberImportResult
     */
    public function __construct($WSCRSHo_InternalMemberImportResult)
    {
        $this->WSCRSHo_InternalMemberImportResult = $WSCRSHo_InternalMemberImportResult;
    }

    /**
     * @return WSCRSHo_InternalMemberImportResult
     */
    public function getWSCRSHo_InternalMemberImportResult()
    {
        return $this->WSCRSHo_InternalMemberImportResult;
    }

    /**
     * @param WSCRSHo_InternalMemberImportResult $WSCRSHo_InternalMemberImportResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_InternalMemberImportResponse
     */
    public function setWSCRSHo_InternalMemberImportResult($WSCRSHo_InternalMemberImportResult)
    {
        $this->WSCRSHo_InternalMemberImportResult = $WSCRSHo_InternalMemberImportResult;
        return $this;
    }
}

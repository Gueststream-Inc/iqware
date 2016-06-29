<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_InternalTAImportResponse
{

    /**
     * @var WSCRSHo_InternalTAImportResult $WSCRSHo_InternalTAImportResult
     */
    protected $WSCRSHo_InternalTAImportResult = null;

    /**
     * @param WSCRSHo_InternalTAImportResult $WSCRSHo_InternalTAImportResult
     */
    public function __construct($WSCRSHo_InternalTAImportResult)
    {
        $this->WSCRSHo_InternalTAImportResult = $WSCRSHo_InternalTAImportResult;
    }

    /**
     * @return WSCRSHo_InternalTAImportResult
     */
    public function getWSCRSHo_InternalTAImportResult()
    {
        return $this->WSCRSHo_InternalTAImportResult;
    }

    /**
     * @param WSCRSHo_InternalTAImportResult $WSCRSHo_InternalTAImportResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_InternalTAImportResponse
     */
    public function setWSCRSHo_InternalTAImportResult($WSCRSHo_InternalTAImportResult)
    {
        $this->WSCRSHo_InternalTAImportResult = $WSCRSHo_InternalTAImportResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetSingleStayValueResponse
{

    /**
     * @var ArrayOfSBDSummary $GetSingleStayValueResult
     */
    protected $GetSingleStayValueResult = null;

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueResult
     */
    public function __construct($GetSingleStayValueResult)
    {
        $this->GetSingleStayValueResult = $GetSingleStayValueResult;
    }

    /**
     * @return ArrayOfSBDSummary
     */
    public function getGetSingleStayValueResult()
    {
        return $this->GetSingleStayValueResult;
    }

    /**
     * @param ArrayOfSBDSummary $GetSingleStayValueResult
     * @return \Gueststream\PMS\IQWare\API\GetSingleStayValueResponse
     */
    public function setGetSingleStayValueResult($GetSingleStayValueResult)
    {
        $this->GetSingleStayValueResult = $GetSingleStayValueResult;
        return $this;
    }
}

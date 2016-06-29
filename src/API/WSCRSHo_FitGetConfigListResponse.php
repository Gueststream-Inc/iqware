<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_FitGetConfigListResponse
{

    /**
     * @var WSCRSHo_FitGetConfigListResult $WSCRSHo_FitGetConfigListResult
     */
    protected $WSCRSHo_FitGetConfigListResult = null;

    /**
     * @param WSCRSHo_FitGetConfigListResult $WSCRSHo_FitGetConfigListResult
     */
    public function __construct($WSCRSHo_FitGetConfigListResult)
    {
        $this->WSCRSHo_FitGetConfigListResult = $WSCRSHo_FitGetConfigListResult;
    }

    /**
     * @return WSCRSHo_FitGetConfigListResult
     */
    public function getWSCRSHo_FitGetConfigListResult()
    {
        return $this->WSCRSHo_FitGetConfigListResult;
    }

    /**
     * @param WSCRSHo_FitGetConfigListResult $WSCRSHo_FitGetConfigListResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_FitGetConfigListResponse
     */
    public function setWSCRSHo_FitGetConfigListResult($WSCRSHo_FitGetConfigListResult)
    {
        $this->WSCRSHo_FitGetConfigListResult = $WSCRSHo_FitGetConfigListResult;
        return $this;
    }
}

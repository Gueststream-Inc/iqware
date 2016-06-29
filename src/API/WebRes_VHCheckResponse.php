<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_VHCheckResponse
{

    /**
     * @var ArrayOfInt $WebRes_VHCheckResult
     */
    protected $WebRes_VHCheckResult = null;

    /**
     * @param ArrayOfInt $WebRes_VHCheckResult
     */
    public function __construct($WebRes_VHCheckResult)
    {
        $this->WebRes_VHCheckResult = $WebRes_VHCheckResult;
    }

    /**
     * @return ArrayOfInt
     */
    public function getWebRes_VHCheckResult()
    {
        return $this->WebRes_VHCheckResult;
    }

    /**
     * @param ArrayOfInt $WebRes_VHCheckResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_VHCheckResponse
     */
    public function setWebRes_VHCheckResult($WebRes_VHCheckResult)
    {
        $this->WebRes_VHCheckResult = $WebRes_VHCheckResult;
        return $this;
    }
}

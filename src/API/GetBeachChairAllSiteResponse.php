<?php

namespace Gueststream\PMS\IQWare\API;

class GetBeachChairAllSiteResponse
{

    /**
     * @var ArrayOfBeachChairSite $GetBeachChairAllSiteResult
     */
    protected $GetBeachChairAllSiteResult = null;

    /**
     * @var TBCResultCode $ResultCode
     */
    protected $ResultCode = null;

    /**
     * @param ArrayOfBeachChairSite $GetBeachChairAllSiteResult
     * @param TBCResultCode $ResultCode
     */
    public function __construct($GetBeachChairAllSiteResult, $ResultCode)
    {
        $this->GetBeachChairAllSiteResult = $GetBeachChairAllSiteResult;
        $this->ResultCode = $ResultCode;
    }

    /**
     * @return ArrayOfBeachChairSite
     */
    public function getGetBeachChairAllSiteResult()
    {
        return $this->GetBeachChairAllSiteResult;
    }

    /**
     * @param ArrayOfBeachChairSite $GetBeachChairAllSiteResult
     * @return \Gueststream\PMS\IQWare\API\GetBeachChairAllSiteResponse
     */
    public function setGetBeachChairAllSiteResult($GetBeachChairAllSiteResult)
    {
        $this->GetBeachChairAllSiteResult = $GetBeachChairAllSiteResult;
        return $this;
    }

    /**
     * @return TBCResultCode
     */
    public function getResultCode()
    {
        return $this->ResultCode;
    }

    /**
     * @param TBCResultCode $ResultCode
     * @return \Gueststream\PMS\IQWare\API\GetBeachChairAllSiteResponse
     */
    public function setResultCode($ResultCode)
    {
        $this->ResultCode = $ResultCode;
        return $this;
    }
}

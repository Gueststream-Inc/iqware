<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCoOwnerDistributionPercentageResponse
{

    /**
     * @var int $WebRes_GetCoOwnerDistributionPercentageResult
     */
    protected $WebRes_GetCoOwnerDistributionPercentageResult = null;

    /**
     * @param int $WebRes_GetCoOwnerDistributionPercentageResult
     */
    public function __construct($WebRes_GetCoOwnerDistributionPercentageResult)
    {
        $this->WebRes_GetCoOwnerDistributionPercentageResult = $WebRes_GetCoOwnerDistributionPercentageResult;
    }

    /**
     * @return int
     */
    public function getWebRes_GetCoOwnerDistributionPercentageResult()
    {
        return $this->WebRes_GetCoOwnerDistributionPercentageResult;
    }

    /**
     * @param int $WebRes_GetCoOwnerDistributionPercentageResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCoOwnerDistributionPercentageResponse
     */
    public function setWebRes_GetCoOwnerDistributionPercentageResult($WebRes_GetCoOwnerDistributionPercentageResult)
    {
        $this->WebRes_GetCoOwnerDistributionPercentageResult = $WebRes_GetCoOwnerDistributionPercentageResult;
        return $this;
    }
}

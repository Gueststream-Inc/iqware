<?php

namespace Gueststream\PMS\IQWare\API;

class GDS_GetRestrictionsResponse
{

    /**
     * @var GDS_GetRestrictionsResult $GDS_GetRestrictionsResult
     */
    protected $GDS_GetRestrictionsResult = null;

    /**
     * @param GDS_GetRestrictionsResult $GDS_GetRestrictionsResult
     */
    public function __construct($GDS_GetRestrictionsResult)
    {
        $this->GDS_GetRestrictionsResult = $GDS_GetRestrictionsResult;
    }

    /**
     * @return GDS_GetRestrictionsResult
     */
    public function getGDS_GetRestrictionsResult()
    {
        return $this->GDS_GetRestrictionsResult;
    }

    /**
     * @param GDS_GetRestrictionsResult $GDS_GetRestrictionsResult
     * @return \Gueststream\PMS\IQWare\API\GDS_GetRestrictionsResponse
     */
    public function setGDS_GetRestrictionsResult($GDS_GetRestrictionsResult)
    {
        $this->GDS_GetRestrictionsResult = $GDS_GetRestrictionsResult;
        return $this;
    }
}

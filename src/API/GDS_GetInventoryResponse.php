<?php

namespace Gueststream\PMS\IQWare\API;

class GDS_GetInventoryResponse
{

    /**
     * @var GDS_GetInventoryResult $GDS_GetInventoryResult
     */
    protected $GDS_GetInventoryResult = null;

    /**
     * @param GDS_GetInventoryResult $GDS_GetInventoryResult
     */
    public function __construct($GDS_GetInventoryResult)
    {
        $this->GDS_GetInventoryResult = $GDS_GetInventoryResult;
    }

    /**
     * @return GDS_GetInventoryResult
     */
    public function getGDS_GetInventoryResult()
    {
        return $this->GDS_GetInventoryResult;
    }

    /**
     * @param GDS_GetInventoryResult $GDS_GetInventoryResult
     * @return \Gueststream\PMS\IQWare\API\GDS_GetInventoryResponse
     */
    public function setGDS_GetInventoryResult($GDS_GetInventoryResult)
    {
        $this->GDS_GetInventoryResult = $GDS_GetInventoryResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GDS_GetListingInfoResponse
{

    /**
     * @var ArrayOfGDSListing $GDS_GetListingInfoResult
     */
    protected $GDS_GetListingInfoResult = null;

    /**
     * @param ArrayOfGDSListing $GDS_GetListingInfoResult
     */
    public function __construct($GDS_GetListingInfoResult)
    {
        $this->GDS_GetListingInfoResult = $GDS_GetListingInfoResult;
    }

    /**
     * @return ArrayOfGDSListing
     */
    public function getGDS_GetListingInfoResult()
    {
        return $this->GDS_GetListingInfoResult;
    }

    /**
     * @param ArrayOfGDSListing $GDS_GetListingInfoResult
     * @return \Gueststream\PMS\IQWare\API\GDS_GetListingInfoResponse
     */
    public function setGDS_GetListingInfoResult($GDS_GetListingInfoResult)
    {
        $this->GDS_GetListingInfoResult = $GDS_GetListingInfoResult;
        return $this;
    }
}

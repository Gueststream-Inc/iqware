<?php

namespace Gueststream\PMS\IQWare\API;

class GDS_GetListingInfo
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var int $intListingType
     */
    protected $intListingType = null;

    /**
     * @param int $intGUID
     * @param int $intListingType
     */
    public function __construct($intGUID, $intListingType)
    {
        $this->intGUID = $intGUID;
        $this->intListingType = $intListingType;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\GDS_GetListingInfo
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntListingType()
    {
        return $this->intListingType;
    }

    /**
     * @param int $intListingType
     * @return \Gueststream\PMS\IQWare\API\GDS_GetListingInfo
     */
    public function setIntListingType($intListingType)
    {
        $this->intListingType = $intListingType;
        return $this;
    }
}

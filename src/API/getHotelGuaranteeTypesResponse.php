<?php

namespace Gueststream\PMS\IQWare\API;

class getHotelGuaranteeTypesResponse
{

    /**
     * @var getHotelGuaranteeTypesResult $getHotelGuaranteeTypesResult
     */
    protected $getHotelGuaranteeTypesResult = null;

    /**
     * @param getHotelGuaranteeTypesResult $getHotelGuaranteeTypesResult
     */
    public function __construct($getHotelGuaranteeTypesResult)
    {
        $this->getHotelGuaranteeTypesResult = $getHotelGuaranteeTypesResult;
    }

    /**
     * @return getHotelGuaranteeTypesResult
     */
    public function getGetHotelGuaranteeTypesResult()
    {
        return $this->getHotelGuaranteeTypesResult;
    }

    /**
     * @param getHotelGuaranteeTypesResult $getHotelGuaranteeTypesResult
     * @return \Gueststream\PMS\IQWare\API\getHotelGuaranteeTypesResponse
     */
    public function setGetHotelGuaranteeTypesResult($getHotelGuaranteeTypesResult)
    {
        $this->getHotelGuaranteeTypesResult = $getHotelGuaranteeTypesResult;
        return $this;
    }
}

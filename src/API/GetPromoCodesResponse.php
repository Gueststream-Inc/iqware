<?php

namespace Gueststream\PMS\IQWare\API;

class GetPromoCodesResponse
{

    /**
     * @var GetPromoCodesResult $GetPromoCodesResult
     */
    protected $GetPromoCodesResult = null;

    /**
     * @param GetPromoCodesResult $GetPromoCodesResult
     */
    public function __construct($GetPromoCodesResult)
    {
        $this->GetPromoCodesResult = $GetPromoCodesResult;
    }

    /**
     * @return GetPromoCodesResult
     */
    public function getGetPromoCodesResult()
    {
        return $this->GetPromoCodesResult;
    }

    /**
     * @param GetPromoCodesResult $GetPromoCodesResult
     * @return \Gueststream\PMS\IQWare\API\GetPromoCodesResponse
     */
    public function setGetPromoCodesResult($GetPromoCodesResult)
    {
        $this->GetPromoCodesResult = $GetPromoCodesResult;
        return $this;
    }
}

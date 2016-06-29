<?php

namespace Gueststream\PMS\IQWare\API;

class GetSpecialOffersResponse
{

    /**
     * @var ArrayOfSpecialOffers $GetSpecialOffersResult
     */
    protected $GetSpecialOffersResult = null;

    /**
     * @param ArrayOfSpecialOffers $GetSpecialOffersResult
     */
    public function __construct($GetSpecialOffersResult)
    {
        $this->GetSpecialOffersResult = $GetSpecialOffersResult;
    }

    /**
     * @return ArrayOfSpecialOffers
     */
    public function getGetSpecialOffersResult()
    {
        return $this->GetSpecialOffersResult;
    }

    /**
     * @param ArrayOfSpecialOffers $GetSpecialOffersResult
     * @return \Gueststream\PMS\IQWare\API\GetSpecialOffersResponse
     */
    public function setGetSpecialOffersResult($GetSpecialOffersResult)
    {
        $this->GetSpecialOffersResult = $GetSpecialOffersResult;
        return $this;
    }
}

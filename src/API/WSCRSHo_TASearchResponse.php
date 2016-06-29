<?php

namespace Gueststream\PMS\IQWare\API;

class WSCRSHo_TASearchResponse
{

    /**
     * @var WSCRSHo_TASearchResult $WSCRSHo_TASearchResult
     */
    protected $WSCRSHo_TASearchResult = null;

    /**
     * @param WSCRSHo_TASearchResult $WSCRSHo_TASearchResult
     */
    public function __construct($WSCRSHo_TASearchResult)
    {
        $this->WSCRSHo_TASearchResult = $WSCRSHo_TASearchResult;
    }

    /**
     * @return WSCRSHo_TASearchResult
     */
    public function getWSCRSHo_TASearchResult()
    {
        return $this->WSCRSHo_TASearchResult;
    }

    /**
     * @param WSCRSHo_TASearchResult $WSCRSHo_TASearchResult
     * @return \Gueststream\PMS\IQWare\API\WSCRSHo_TASearchResponse
     */
    public function setWSCRSHo_TASearchResult($WSCRSHo_TASearchResult)
    {
        $this->WSCRSHo_TASearchResult = $WSCRSHo_TASearchResult;
        return $this;
    }
}

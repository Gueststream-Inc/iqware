<?php

namespace Gueststream\PMS\IQWare\API;

class PMSResaSearchResponse
{

    /**
     * @var PMSResaSearchResult $PMSResaSearchResult
     */
    protected $PMSResaSearchResult = null;

    /**
     * @param PMSResaSearchResult $PMSResaSearchResult
     */
    public function __construct($PMSResaSearchResult)
    {
        $this->PMSResaSearchResult = $PMSResaSearchResult;
    }

    /**
     * @return PMSResaSearchResult
     */
    public function getPMSResaSearchResult()
    {
        return $this->PMSResaSearchResult;
    }

    /**
     * @param PMSResaSearchResult $PMSResaSearchResult
     * @return \Gueststream\PMS\IQWare\API\PMSResaSearchResponse
     */
    public function setPMSResaSearchResult($PMSResaSearchResult)
    {
        $this->PMSResaSearchResult = $PMSResaSearchResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GoogleEvalResponse
{

    /**
     * @var ArrayOfDataSet $GoogleEvalResult
     */
    protected $GoogleEvalResult = null;

    /**
     * @param ArrayOfDataSet $GoogleEvalResult
     */
    public function __construct($GoogleEvalResult)
    {
        $this->GoogleEvalResult = $GoogleEvalResult;
    }

    /**
     * @return ArrayOfDataSet
     */
    public function getGoogleEvalResult()
    {
        return $this->GoogleEvalResult;
    }

    /**
     * @param ArrayOfDataSet $GoogleEvalResult
     * @return \Gueststream\PMS\IQWare\API\GoogleEvalResponse
     */
    public function setGoogleEvalResult($GoogleEvalResult)
    {
        $this->GoogleEvalResult = $GoogleEvalResult;
        return $this;
    }
}

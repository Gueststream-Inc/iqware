<?php

namespace Gueststream\PMS\IQWare\API;

class getAccomodationsResponse
{

    /**
     * @var getAccomodationsResult $getAccomodationsResult
     */
    protected $getAccomodationsResult = null;

    /**
     * @param getAccomodationsResult $getAccomodationsResult
     */
    public function __construct($getAccomodationsResult)
    {
        $this->getAccomodationsResult = $getAccomodationsResult;
    }

    /**
     * @return getAccomodationsResult
     */
    public function getGetAccomodationsResult()
    {
        return $this->getAccomodationsResult;
    }

    /**
     * @param getAccomodationsResult $getAccomodationsResult
     * @return \Gueststream\PMS\IQWare\API\getAccomodationsResponse
     */
    public function setGetAccomodationsResult($getAccomodationsResult)
    {
        $this->getAccomodationsResult = $getAccomodationsResult;
        return $this;
    }
}

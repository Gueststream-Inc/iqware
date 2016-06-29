<?php

namespace Gueststream\PMS\IQWare\API;

class getAvailElementsForStayResponse
{

    /**
     * @var getAvailElementsForStayResult $getAvailElementsForStayResult
     */
    protected $getAvailElementsForStayResult = null;

    /**
     * @param getAvailElementsForStayResult $getAvailElementsForStayResult
     */
    public function __construct($getAvailElementsForStayResult)
    {
        $this->getAvailElementsForStayResult = $getAvailElementsForStayResult;
    }

    /**
     * @return getAvailElementsForStayResult
     */
    public function getGetAvailElementsForStayResult()
    {
        return $this->getAvailElementsForStayResult;
    }

    /**
     * @param getAvailElementsForStayResult $getAvailElementsForStayResult
     * @return \Gueststream\PMS\IQWare\API\getAvailElementsForStayResponse
     */
    public function setGetAvailElementsForStayResult($getAvailElementsForStayResult)
    {
        $this->getAvailElementsForStayResult = $getAvailElementsForStayResult;
        return $this;
    }
}

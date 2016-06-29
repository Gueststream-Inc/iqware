<?php

namespace Gueststream\PMS\IQWare\API;

class getElementAgeCatDetailResponse
{

    /**
     * @var getElementAgeCatDetailResult $getElementAgeCatDetailResult
     */
    protected $getElementAgeCatDetailResult = null;

    /**
     * @param getElementAgeCatDetailResult $getElementAgeCatDetailResult
     */
    public function __construct($getElementAgeCatDetailResult)
    {
        $this->getElementAgeCatDetailResult = $getElementAgeCatDetailResult;
    }

    /**
     * @return getElementAgeCatDetailResult
     */
    public function getGetElementAgeCatDetailResult()
    {
        return $this->getElementAgeCatDetailResult;
    }

    /**
     * @param getElementAgeCatDetailResult $getElementAgeCatDetailResult
     * @return \Gueststream\PMS\IQWare\API\getElementAgeCatDetailResponse
     */
    public function setGetElementAgeCatDetailResult($getElementAgeCatDetailResult)
    {
        $this->getElementAgeCatDetailResult = $getElementAgeCatDetailResult;
        return $this;
    }
}

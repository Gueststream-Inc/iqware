<?php

namespace Gueststream\PMS\IQWare\API;

class getElementsAgesCategoriesResponse
{

    /**
     * @var getElementsAgesCategoriesResult $getElementsAgesCategoriesResult
     */
    protected $getElementsAgesCategoriesResult = null;

    /**
     * @param getElementsAgesCategoriesResult $getElementsAgesCategoriesResult
     */
    public function __construct($getElementsAgesCategoriesResult)
    {
        $this->getElementsAgesCategoriesResult = $getElementsAgesCategoriesResult;
    }

    /**
     * @return getElementsAgesCategoriesResult
     */
    public function getGetElementsAgesCategoriesResult()
    {
        return $this->getElementsAgesCategoriesResult;
    }

    /**
     * @param getElementsAgesCategoriesResult $getElementsAgesCategoriesResult
     * @return \Gueststream\PMS\IQWare\API\getElementsAgesCategoriesResponse
     */
    public function setGetElementsAgesCategoriesResult($getElementsAgesCategoriesResult)
    {
        $this->getElementsAgesCategoriesResult = $getElementsAgesCategoriesResult;
        return $this;
    }
}

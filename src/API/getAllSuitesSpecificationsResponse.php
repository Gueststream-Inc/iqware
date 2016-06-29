<?php

namespace Gueststream\PMS\IQWare\API;

class getAllSuitesSpecificationsResponse
{

    /**
     * @var ArrayOfSuitesSpecification $getAllSuitesSpecificationsResult
     */
    protected $getAllSuitesSpecificationsResult = null;

    /**
     * @param ArrayOfSuitesSpecification $getAllSuitesSpecificationsResult
     */
    public function __construct($getAllSuitesSpecificationsResult)
    {
        $this->getAllSuitesSpecificationsResult = $getAllSuitesSpecificationsResult;
    }

    /**
     * @return ArrayOfSuitesSpecification
     */
    public function getGetAllSuitesSpecificationsResult()
    {
        return $this->getAllSuitesSpecificationsResult;
    }

    /**
     * @param ArrayOfSuitesSpecification $getAllSuitesSpecificationsResult
     * @return \Gueststream\PMS\IQWare\API\getAllSuitesSpecificationsResponse
     */
    public function setGetAllSuitesSpecificationsResult($getAllSuitesSpecificationsResult)
    {
        $this->getAllSuitesSpecificationsResult = $getAllSuitesSpecificationsResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetUserDefinedFieldsForUnitsResponse
{

    /**
     * @var GetUserDefinedFieldsForUnitsResult $GetUserDefinedFieldsForUnitsResult
     */
    protected $GetUserDefinedFieldsForUnitsResult = null;

    /**
     * @param GetUserDefinedFieldsForUnitsResult $GetUserDefinedFieldsForUnitsResult
     */
    public function __construct($GetUserDefinedFieldsForUnitsResult)
    {
        $this->GetUserDefinedFieldsForUnitsResult = $GetUserDefinedFieldsForUnitsResult;
    }

    /**
     * @return GetUserDefinedFieldsForUnitsResult
     */
    public function getGetUserDefinedFieldsForUnitsResult()
    {
        return $this->GetUserDefinedFieldsForUnitsResult;
    }

    /**
     * @param GetUserDefinedFieldsForUnitsResult $GetUserDefinedFieldsForUnitsResult
     * @return \Gueststream\PMS\IQWare\API\GetUserDefinedFieldsForUnitsResponse
     */
    public function setGetUserDefinedFieldsForUnitsResult($GetUserDefinedFieldsForUnitsResult)
    {
        $this->GetUserDefinedFieldsForUnitsResult = $GetUserDefinedFieldsForUnitsResult;
        return $this;
    }
}

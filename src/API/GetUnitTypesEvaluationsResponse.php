<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitTypesEvaluationsResponse
{

    /**
     * @var ArrayOfEvaluation $GetUnitTypesEvaluationsResult
     */
    protected $GetUnitTypesEvaluationsResult = null;

    /**
     * @param ArrayOfEvaluation $GetUnitTypesEvaluationsResult
     */
    public function __construct($GetUnitTypesEvaluationsResult)
    {
        $this->GetUnitTypesEvaluationsResult = $GetUnitTypesEvaluationsResult;
    }

    /**
     * @return ArrayOfEvaluation
     */
    public function getGetUnitTypesEvaluationsResult()
    {
        return $this->GetUnitTypesEvaluationsResult;
    }

    /**
     * @param ArrayOfEvaluation $GetUnitTypesEvaluationsResult
     * @return \Gueststream\PMS\IQWare\API\GetUnitTypesEvaluationsResponse
     */
    public function setGetUnitTypesEvaluationsResult($GetUnitTypesEvaluationsResult)
    {
        $this->GetUnitTypesEvaluationsResult = $GetUnitTypesEvaluationsResult;
        return $this;
    }
}

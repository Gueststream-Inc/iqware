<?php

namespace Gueststream\PMS\IQWare\API;

class EvaluationThreadedResponse
{

    /**
     * @var ArrayOfEvaluation $EvaluationThreadedResult
     */
    protected $EvaluationThreadedResult = null;

    /**
     * @param ArrayOfEvaluation $EvaluationThreadedResult
     */
    public function __construct($EvaluationThreadedResult)
    {
        $this->EvaluationThreadedResult = $EvaluationThreadedResult;
    }

    /**
     * @return ArrayOfEvaluation
     */
    public function getEvaluationThreadedResult()
    {
        return $this->EvaluationThreadedResult;
    }

    /**
     * @param ArrayOfEvaluation $EvaluationThreadedResult
     * @return \Gueststream\PMS\IQWare\API\EvaluationThreadedResponse
     */
    public function setEvaluationThreadedResult($EvaluationThreadedResult)
    {
        $this->EvaluationThreadedResult = $EvaluationThreadedResult;
        return $this;
    }
}

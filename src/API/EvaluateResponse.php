<?php

namespace Gueststream\PMS\IQWare\API;

class EvaluateResponse
{

    /**
     * @var EvaluateResult $EvaluateResult
     */
    protected $EvaluateResult = null;

    /**
     * @param EvaluateResult $EvaluateResult
     */
    public function __construct($EvaluateResult)
    {
        $this->EvaluateResult = $EvaluateResult;
    }

    /**
     * @return EvaluateResult
     */
    public function getEvaluateResult()
    {
        return $this->EvaluateResult;
    }

    /**
     * @param EvaluateResult $EvaluateResult
     * @return \Gueststream\PMS\IQWare\API\EvaluateResponse
     */
    public function setEvaluateResult($EvaluateResult)
    {
        $this->EvaluateResult = $EvaluateResult;
        return $this;
    }
}

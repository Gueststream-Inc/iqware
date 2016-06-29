<?php

namespace Gueststream\PMS\IQWare\API;

class GetAvailRatesAndRoomNumbersWithEvaluationResponse
{

    /**
     * @var ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersWithEvaluationResult
     */
    protected $GetAvailRatesAndRoomNumbersWithEvaluationResult = null;

    /**
     * @param ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersWithEvaluationResult
     */
    public function __construct($GetAvailRatesAndRoomNumbersWithEvaluationResult)
    {
        $this->GetAvailRatesAndRoomNumbersWithEvaluationResult = $GetAvailRatesAndRoomNumbersWithEvaluationResult;
    }

    /**
     * @return ArrayOfStayValue3
     */
    public function getGetAvailRatesAndRoomNumbersWithEvaluationResult()
    {
        return $this->GetAvailRatesAndRoomNumbersWithEvaluationResult;
    }

    /**
     * @param ArrayOfStayValue3 $GetAvailRatesAndRoomNumbersWithEvaluationResult
     * @return \Gueststream\PMS\IQWare\API\GetAvailRatesAndRoomNumbersWithEvaluationResponse
     */
    public function setGetAvailRatesAndRoomNumbersWithEvaluationResult($GetAvailRatesAndRoomNumbersWithEvaluationResult)
    {
        $this->GetAvailRatesAndRoomNumbersWithEvaluationResult = $GetAvailRatesAndRoomNumbersWithEvaluationResult;
        return $this;
    }
}

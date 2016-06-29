<?php

namespace Gueststream\PMS\IQWare\API;

class GetAllCancellationReasonsResponse
{

    /**
     * @var ArrayOfCancellationReason $GetAllCancellationReasonsResult
     */
    protected $GetAllCancellationReasonsResult = null;

    /**
     * @param ArrayOfCancellationReason $GetAllCancellationReasonsResult
     */
    public function __construct($GetAllCancellationReasonsResult)
    {
        $this->GetAllCancellationReasonsResult = $GetAllCancellationReasonsResult;
    }

    /**
     * @return ArrayOfCancellationReason
     */
    public function getGetAllCancellationReasonsResult()
    {
        return $this->GetAllCancellationReasonsResult;
    }

    /**
     * @param ArrayOfCancellationReason $GetAllCancellationReasonsResult
     * @return \Gueststream\PMS\IQWare\API\GetAllCancellationReasonsResponse
     */
    public function setGetAllCancellationReasonsResult($GetAllCancellationReasonsResult)
    {
        $this->GetAllCancellationReasonsResult = $GetAllCancellationReasonsResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class GetAllCancellationNewResponse
{

    /**
     * @var GetAllCancellationNewResult $GetAllCancellationNewResult
     */
    protected $GetAllCancellationNewResult = null;

    /**
     * @param GetAllCancellationNewResult $GetAllCancellationNewResult
     */
    public function __construct($GetAllCancellationNewResult)
    {
        $this->GetAllCancellationNewResult = $GetAllCancellationNewResult;
    }

    /**
     * @return GetAllCancellationNewResult
     */
    public function getGetAllCancellationNewResult()
    {
        return $this->GetAllCancellationNewResult;
    }

    /**
     * @param GetAllCancellationNewResult $GetAllCancellationNewResult
     * @return \Gueststream\PMS\IQWare\API\GetAllCancellationNewResponse
     */
    public function setGetAllCancellationNewResult($GetAllCancellationNewResult)
    {
        $this->GetAllCancellationNewResult = $GetAllCancellationNewResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class ProcessCancellationResponse
{

    /**
     * @var ProtobasePostResult $ProcessCancellationResult
     */
    protected $ProcessCancellationResult = null;

    /**
     * @param ProtobasePostResult $ProcessCancellationResult
     */
    public function __construct($ProcessCancellationResult)
    {
        $this->ProcessCancellationResult = $ProcessCancellationResult;
    }

    /**
     * @return ProtobasePostResult
     */
    public function getProcessCancellationResult()
    {
        return $this->ProcessCancellationResult;
    }

    /**
     * @param ProtobasePostResult $ProcessCancellationResult
     * @return \Gueststream\PMS\IQWare\API\ProcessCancellationResponse
     */
    public function setProcessCancellationResult($ProcessCancellationResult)
    {
        $this->ProcessCancellationResult = $ProcessCancellationResult;
        return $this;
    }
}

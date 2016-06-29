<?php

namespace Gueststream\PMS\IQWare\API;

class ProcessCardResponse
{

    /**
     * @var ProtobasePostResult $ProcessCardResult
     */
    protected $ProcessCardResult = null;

    /**
     * @param ProtobasePostResult $ProcessCardResult
     */
    public function __construct($ProcessCardResult)
    {
        $this->ProcessCardResult = $ProcessCardResult;
    }

    /**
     * @return ProtobasePostResult
     */
    public function getProcessCardResult()
    {
        return $this->ProcessCardResult;
    }

    /**
     * @param ProtobasePostResult $ProcessCardResult
     * @return \Gueststream\PMS\IQWare\API\ProcessCardResponse
     */
    public function setProcessCardResult($ProcessCardResult)
    {
        $this->ProcessCardResult = $ProcessCardResult;
        return $this;
    }
}

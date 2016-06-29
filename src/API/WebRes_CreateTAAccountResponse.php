<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_CreateTAAccountResponse
{

    /**
     * @var CreateTAResultEnum $WebRes_CreateTAAccountResult
     */
    protected $WebRes_CreateTAAccountResult = null;

    /**
     * @param CreateTAResultEnum $WebRes_CreateTAAccountResult
     */
    public function __construct($WebRes_CreateTAAccountResult)
    {
        $this->WebRes_CreateTAAccountResult = $WebRes_CreateTAAccountResult;
    }

    /**
     * @return CreateTAResultEnum
     */
    public function getWebRes_CreateTAAccountResult()
    {
        return $this->WebRes_CreateTAAccountResult;
    }

    /**
     * @param CreateTAResultEnum $WebRes_CreateTAAccountResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_CreateTAAccountResponse
     */
    public function setWebRes_CreateTAAccountResult($WebRes_CreateTAAccountResult)
    {
        $this->WebRes_CreateTAAccountResult = $WebRes_CreateTAAccountResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getResaListResponse
{

    /**
     * @var WebRes_getResaListResult $WebRes_getResaListResult
     */
    protected $WebRes_getResaListResult = null;

    /**
     * @param WebRes_getResaListResult $WebRes_getResaListResult
     */
    public function __construct($WebRes_getResaListResult)
    {
        $this->WebRes_getResaListResult = $WebRes_getResaListResult;
    }

    /**
     * @return WebRes_getResaListResult
     */
    public function getWebRes_getResaListResult()
    {
        return $this->WebRes_getResaListResult;
    }

    /**
     * @param WebRes_getResaListResult $WebRes_getResaListResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getResaListResponse
     */
    public function setWebRes_getResaListResult($WebRes_getResaListResult)
    {
        $this->WebRes_getResaListResult = $WebRes_getResaListResult;
        return $this;
    }
}

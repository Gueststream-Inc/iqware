<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetResaStayValueResponse
{

    /**
     * @var WebRes_GetResaStayValueResult $WebRes_GetResaStayValueResult
     */
    protected $WebRes_GetResaStayValueResult = null;

    /**
     * @param WebRes_GetResaStayValueResult $WebRes_GetResaStayValueResult
     */
    public function __construct($WebRes_GetResaStayValueResult)
    {
        $this->WebRes_GetResaStayValueResult = $WebRes_GetResaStayValueResult;
    }

    /**
     * @return WebRes_GetResaStayValueResult
     */
    public function getWebRes_GetResaStayValueResult()
    {
        return $this->WebRes_GetResaStayValueResult;
    }

    /**
     * @param WebRes_GetResaStayValueResult $WebRes_GetResaStayValueResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueResponse
     */
    public function setWebRes_GetResaStayValueResult($WebRes_GetResaStayValueResult)
    {
        $this->WebRes_GetResaStayValueResult = $WebRes_GetResaStayValueResult;
        return $this;
    }
}

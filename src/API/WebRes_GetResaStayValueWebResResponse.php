<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetResaStayValueWebResResponse
{

    /**
     * @var WebRes_GetResaStayValueWebResResult $WebRes_GetResaStayValueWebResResult
     */
    protected $WebRes_GetResaStayValueWebResResult = null;

    /**
     * @param WebRes_GetResaStayValueWebResResult $WebRes_GetResaStayValueWebResResult
     */
    public function __construct($WebRes_GetResaStayValueWebResResult)
    {
        $this->WebRes_GetResaStayValueWebResResult = $WebRes_GetResaStayValueWebResResult;
    }

    /**
     * @return WebRes_GetResaStayValueWebResResult
     */
    public function getWebRes_GetResaStayValueWebResResult()
    {
        return $this->WebRes_GetResaStayValueWebResResult;
    }

    /**
     * @param WebRes_GetResaStayValueWebResResult $WebRes_GetResaStayValueWebResResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetResaStayValueWebResResponse
     */
    public function setWebRes_GetResaStayValueWebResResult($WebRes_GetResaStayValueWebResResult)
    {
        $this->WebRes_GetResaStayValueWebResResult = $WebRes_GetResaStayValueWebResResult;
        return $this;
    }
}

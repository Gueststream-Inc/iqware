<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_getRateStayValueWebResResponse
{

    /**
     * @var WebRes_getRateStayValueWebResResult $WebRes_getRateStayValueWebResResult
     */
    protected $WebRes_getRateStayValueWebResResult = null;

    /**
     * @param WebRes_getRateStayValueWebResResult $WebRes_getRateStayValueWebResResult
     */
    public function __construct($WebRes_getRateStayValueWebResResult)
    {
        $this->WebRes_getRateStayValueWebResResult = $WebRes_getRateStayValueWebResResult;
    }

    /**
     * @return WebRes_getRateStayValueWebResResult
     */
    public function getWebRes_getRateStayValueWebResResult()
    {
        return $this->WebRes_getRateStayValueWebResResult;
    }

    /**
     * @param WebRes_getRateStayValueWebResResult $WebRes_getRateStayValueWebResResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_getRateStayValueWebResResponse
     */
    public function setWebRes_getRateStayValueWebResResult($WebRes_getRateStayValueWebResResult)
    {
        $this->WebRes_getRateStayValueWebResResult = $WebRes_getRateStayValueWebResResult;
        return $this;
    }
}

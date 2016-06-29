<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_translateActivitiesResponse
{

    /**
     * @var WebRes_translateActivitiesResult $WebRes_translateActivitiesResult
     */
    protected $WebRes_translateActivitiesResult = null;

    /**
     * @param WebRes_translateActivitiesResult $WebRes_translateActivitiesResult
     */
    public function __construct($WebRes_translateActivitiesResult)
    {
        $this->WebRes_translateActivitiesResult = $WebRes_translateActivitiesResult;
    }

    /**
     * @return WebRes_translateActivitiesResult
     */
    public function getWebRes_translateActivitiesResult()
    {
        return $this->WebRes_translateActivitiesResult;
    }

    /**
     * @param WebRes_translateActivitiesResult $WebRes_translateActivitiesResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_translateActivitiesResponse
     */
    public function setWebRes_translateActivitiesResult($WebRes_translateActivitiesResult)
    {
        $this->WebRes_translateActivitiesResult = $WebRes_translateActivitiesResult;
        return $this;
    }
}

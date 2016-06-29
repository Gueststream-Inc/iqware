<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetGroupBlocAvailabilityResponse
{

    /**
     * @var WebRes_GetGroupBlocAvailabilityResult $WebRes_GetGroupBlocAvailabilityResult
     */
    protected $WebRes_GetGroupBlocAvailabilityResult = null;

    /**
     * @param WebRes_GetGroupBlocAvailabilityResult $WebRes_GetGroupBlocAvailabilityResult
     */
    public function __construct($WebRes_GetGroupBlocAvailabilityResult)
    {
        $this->WebRes_GetGroupBlocAvailabilityResult = $WebRes_GetGroupBlocAvailabilityResult;
    }

    /**
     * @return WebRes_GetGroupBlocAvailabilityResult
     */
    public function getWebRes_GetGroupBlocAvailabilityResult()
    {
        return $this->WebRes_GetGroupBlocAvailabilityResult;
    }

    /**
     * @param WebRes_GetGroupBlocAvailabilityResult $WebRes_GetGroupBlocAvailabilityResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetGroupBlocAvailabilityResponse
     */
    public function setWebRes_GetGroupBlocAvailabilityResult($WebRes_GetGroupBlocAvailabilityResult)
    {
        $this->WebRes_GetGroupBlocAvailabilityResult = $WebRes_GetGroupBlocAvailabilityResult;
        return $this;
    }
}

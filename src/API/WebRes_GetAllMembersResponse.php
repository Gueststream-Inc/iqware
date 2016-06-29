<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetAllMembersResponse
{

    /**
     * @var ArrayOfGlobalAccess $WebRes_GetAllMembersResult
     */
    protected $WebRes_GetAllMembersResult = null;

    /**
     * @param ArrayOfGlobalAccess $WebRes_GetAllMembersResult
     */
    public function __construct($WebRes_GetAllMembersResult)
    {
        $this->WebRes_GetAllMembersResult = $WebRes_GetAllMembersResult;
    }

    /**
     * @return ArrayOfGlobalAccess
     */
    public function getWebRes_GetAllMembersResult()
    {
        return $this->WebRes_GetAllMembersResult;
    }

    /**
     * @param ArrayOfGlobalAccess $WebRes_GetAllMembersResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetAllMembersResponse
     */
    public function setWebRes_GetAllMembersResult($WebRes_GetAllMembersResult)
    {
        $this->WebRes_GetAllMembersResult = $WebRes_GetAllMembersResult;
        return $this;
    }
}

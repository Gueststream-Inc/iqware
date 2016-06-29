<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerRoomInfoResponse
{

    /**
     * @var cCondoOwnerRoom $WebRes_GetCondoOwnerRoomInfoResult
     */
    protected $WebRes_GetCondoOwnerRoomInfoResult = null;

    /**
     * @param cCondoOwnerRoom $WebRes_GetCondoOwnerRoomInfoResult
     */
    public function __construct($WebRes_GetCondoOwnerRoomInfoResult)
    {
        $this->WebRes_GetCondoOwnerRoomInfoResult = $WebRes_GetCondoOwnerRoomInfoResult;
    }

    /**
     * @return cCondoOwnerRoom
     */
    public function getWebRes_GetCondoOwnerRoomInfoResult()
    {
        return $this->WebRes_GetCondoOwnerRoomInfoResult;
    }

    /**
     * @param cCondoOwnerRoom $WebRes_GetCondoOwnerRoomInfoResult
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerRoomInfoResponse
     */
    public function setWebRes_GetCondoOwnerRoomInfoResult($WebRes_GetCondoOwnerRoomInfoResult)
    {
        $this->WebRes_GetCondoOwnerRoomInfoResult = $WebRes_GetCondoOwnerRoomInfoResult;
        return $this;
    }
}

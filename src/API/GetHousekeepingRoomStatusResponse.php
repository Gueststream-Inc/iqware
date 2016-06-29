<?php

namespace Gueststream\PMS\IQWare\API;

class GetHousekeepingRoomStatusResponse
{

    /**
     * @var GetHousekeepingRoomStatusResult $GetHousekeepingRoomStatusResult
     */
    protected $GetHousekeepingRoomStatusResult = null;

    /**
     * @param GetHousekeepingRoomStatusResult $GetHousekeepingRoomStatusResult
     */
    public function __construct($GetHousekeepingRoomStatusResult)
    {
        $this->GetHousekeepingRoomStatusResult = $GetHousekeepingRoomStatusResult;
    }

    /**
     * @return GetHousekeepingRoomStatusResult
     */
    public function getGetHousekeepingRoomStatusResult()
    {
        return $this->GetHousekeepingRoomStatusResult;
    }

    /**
     * @param GetHousekeepingRoomStatusResult $GetHousekeepingRoomStatusResult
     * @return \Gueststream\PMS\IQWare\API\GetHousekeepingRoomStatusResponse
     */
    public function setGetHousekeepingRoomStatusResult($GetHousekeepingRoomStatusResult)
    {
        $this->GetHousekeepingRoomStatusResult = $GetHousekeepingRoomStatusResult;
        return $this;
    }
}

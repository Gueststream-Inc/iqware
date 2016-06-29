<?php

namespace Gueststream\PMS\IQWare\API;

class getRoomAttributesResponse
{

    /**
     * @var getRoomAttributesResult $getRoomAttributesResult
     */
    protected $getRoomAttributesResult = null;

    /**
     * @param getRoomAttributesResult $getRoomAttributesResult
     */
    public function __construct($getRoomAttributesResult)
    {
        $this->getRoomAttributesResult = $getRoomAttributesResult;
    }

    /**
     * @return getRoomAttributesResult
     */
    public function getGetRoomAttributesResult()
    {
        return $this->getRoomAttributesResult;
    }

    /**
     * @param getRoomAttributesResult $getRoomAttributesResult
     * @return \Gueststream\PMS\IQWare\API\getRoomAttributesResponse
     */
    public function setGetRoomAttributesResult($getRoomAttributesResult)
    {
        $this->getRoomAttributesResult = $getRoomAttributesResult;
        return $this;
    }
}

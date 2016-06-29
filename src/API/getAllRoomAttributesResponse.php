<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomAttributesResponse
{

    /**
     * @var ArrayOfRoomAttribute $getAllRoomAttributesResult
     */
    protected $getAllRoomAttributesResult = null;

    /**
     * @param ArrayOfRoomAttribute $getAllRoomAttributesResult
     */
    public function __construct($getAllRoomAttributesResult)
    {
        $this->getAllRoomAttributesResult = $getAllRoomAttributesResult;
    }

    /**
     * @return ArrayOfRoomAttribute
     */
    public function getGetAllRoomAttributesResult()
    {
        return $this->getAllRoomAttributesResult;
    }

    /**
     * @param ArrayOfRoomAttribute $getAllRoomAttributesResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomAttributesResponse
     */
    public function setGetAllRoomAttributesResult($getAllRoomAttributesResult)
    {
        $this->getAllRoomAttributesResult = $getAllRoomAttributesResult;
        return $this;
    }
}

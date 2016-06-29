<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomsSpecificationsResponse
{

    /**
     * @var ArrayOfRoomSpecification $getAllRoomsSpecificationsResult
     */
    protected $getAllRoomsSpecificationsResult = null;

    /**
     * @param ArrayOfRoomSpecification $getAllRoomsSpecificationsResult
     */
    public function __construct($getAllRoomsSpecificationsResult)
    {
        $this->getAllRoomsSpecificationsResult = $getAllRoomsSpecificationsResult;
    }

    /**
     * @return ArrayOfRoomSpecification
     */
    public function getGetAllRoomsSpecificationsResult()
    {
        return $this->getAllRoomsSpecificationsResult;
    }

    /**
     * @param ArrayOfRoomSpecification $getAllRoomsSpecificationsResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsSpecificationsResponse
     */
    public function setGetAllRoomsSpecificationsResult($getAllRoomsSpecificationsResult)
    {
        $this->getAllRoomsSpecificationsResult = $getAllRoomsSpecificationsResult;
        return $this;
    }
}

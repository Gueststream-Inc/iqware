<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomsAvailabilityForStayFastResponse
{

    /**
     * @var ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayFastResult
     */
    protected $getAllRoomsAvailabilityForStayFastResult = null;

    /**
     * @param ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayFastResult
     */
    public function __construct($getAllRoomsAvailabilityForStayFastResult)
    {
        $this->getAllRoomsAvailabilityForStayFastResult = $getAllRoomsAvailabilityForStayFastResult;
    }

    /**
     * @return ArrayOfRoomAvailabilityForStay
     */
    public function getGetAllRoomsAvailabilityForStayFastResult()
    {
        return $this->getAllRoomsAvailabilityForStayFastResult;
    }

    /**
     * @param ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayFastResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayFastResponse
     */
    public function setGetAllRoomsAvailabilityForStayFastResult($getAllRoomsAvailabilityForStayFastResult)
    {
        $this->getAllRoomsAvailabilityForStayFastResult = $getAllRoomsAvailabilityForStayFastResult;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomsAvailabilityForStayBackToBackResponse
{

    /**
     * @var ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayBackToBackResult
     */
    protected $getAllRoomsAvailabilityForStayBackToBackResult = null;

    /**
     * @param ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayBackToBackResult
     */
    public function __construct($getAllRoomsAvailabilityForStayBackToBackResult)
    {
        $this->getAllRoomsAvailabilityForStayBackToBackResult = $getAllRoomsAvailabilityForStayBackToBackResult;
    }

    /**
     * @return ArrayOfRoomAvailabilityForStay
     */
    public function getGetAllRoomsAvailabilityForStayBackToBackResult()
    {
        return $this->getAllRoomsAvailabilityForStayBackToBackResult;
    }

    /**
     * @param ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayBackToBackResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayBackToBackResponse
     */
    public function setGetAllRoomsAvailabilityForStayBackToBackResult($getAllRoomsAvailabilityForStayBackToBackResult)
    {
        $this->getAllRoomsAvailabilityForStayBackToBackResult = $getAllRoomsAvailabilityForStayBackToBackResult;
        return $this;
    }
}

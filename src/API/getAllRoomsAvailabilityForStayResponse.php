<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomsAvailabilityForStayResponse
{

    /**
     * @var ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayResult
     */
    protected $getAllRoomsAvailabilityForStayResult = null;

    /**
     * @param ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayResult
     */
    public function __construct($getAllRoomsAvailabilityForStayResult)
    {
        $this->getAllRoomsAvailabilityForStayResult = $getAllRoomsAvailabilityForStayResult;
    }

    /**
     * @return ArrayOfRoomAvailabilityForStay
     */
    public function getGetAllRoomsAvailabilityForStayResult()
    {
        return $this->getAllRoomsAvailabilityForStayResult;
    }

    /**
     * @param ArrayOfRoomAvailabilityForStay $getAllRoomsAvailabilityForStayResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityForStayResponse
     */
    public function setGetAllRoomsAvailabilityForStayResult($getAllRoomsAvailabilityForStayResult)
    {
        $this->getAllRoomsAvailabilityForStayResult = $getAllRoomsAvailabilityForStayResult;
        return $this;
    }
}

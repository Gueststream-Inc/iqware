<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomsAvailabilityCalendarResponse
{

    /**
     * @var ArrayOfRoomCalendar $getAllRoomsAvailabilityCalendarResult
     */
    protected $getAllRoomsAvailabilityCalendarResult = null;

    /**
     * @param ArrayOfRoomCalendar $getAllRoomsAvailabilityCalendarResult
     */
    public function __construct($getAllRoomsAvailabilityCalendarResult)
    {
        $this->getAllRoomsAvailabilityCalendarResult = $getAllRoomsAvailabilityCalendarResult;
    }

    /**
     * @return ArrayOfRoomCalendar
     */
    public function getGetAllRoomsAvailabilityCalendarResult()
    {
        return $this->getAllRoomsAvailabilityCalendarResult;
    }

    /**
     * @param ArrayOfRoomCalendar $getAllRoomsAvailabilityCalendarResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityCalendarResponse
     */
    public function setGetAllRoomsAvailabilityCalendarResult($getAllRoomsAvailabilityCalendarResult)
    {
        $this->getAllRoomsAvailabilityCalendarResult = $getAllRoomsAvailabilityCalendarResult;
        return $this;
    }
}

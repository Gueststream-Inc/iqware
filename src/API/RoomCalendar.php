<?php

namespace Gueststream\PMS\IQWare\API;

class RoomCalendar
{

    /**
     * @var \DateTime $CalendarDate
     */
    protected $CalendarDate = null;

    /**
     * @var int $AvailableRooms
     */
    protected $AvailableRooms = null;

    /**
     * @var int $AvailableSuites
     */
    protected $AvailableSuites = null;

    /**
     * @param \DateTime $CalendarDate
     * @param int $AvailableRooms
     * @param int $AvailableSuites
     */
    public function __construct(\DateTime $CalendarDate, $AvailableRooms, $AvailableSuites)
    {
        $this->CalendarDate = $CalendarDate->format(\DateTime::ATOM);
        $this->AvailableRooms = $AvailableRooms;
        $this->AvailableSuites = $AvailableSuites;
    }

    /**
     * @return \DateTime
     */
    public function getCalendarDate()
    {
        if ($this->CalendarDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CalendarDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CalendarDate
     * @return \Gueststream\PMS\IQWare\API\RoomCalendar
     */
    public function setCalendarDate(\DateTime $CalendarDate)
    {
        $this->CalendarDate = $CalendarDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailableRooms()
    {
        return $this->AvailableRooms;
    }

    /**
     * @param int $AvailableRooms
     * @return \Gueststream\PMS\IQWare\API\RoomCalendar
     */
    public function setAvailableRooms($AvailableRooms)
    {
        $this->AvailableRooms = $AvailableRooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailableSuites()
    {
        return $this->AvailableSuites;
    }

    /**
     * @param int $AvailableSuites
     * @return \Gueststream\PMS\IQWare\API\RoomCalendar
     */
    public function setAvailableSuites($AvailableSuites)
    {
        $this->AvailableSuites = $AvailableSuites;
        return $this;
    }
}

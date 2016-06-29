<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomsAvailabilityCalendar
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var string $strRoomIDs
     */
    protected $strRoomIDs = null;

    /**
     * @var string $strRoomTypeIDs
     */
    protected $strRoomTypeIDs = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @param int $guid
     * @param string $strRoomIDs
     * @param string $strRoomTypeIDs
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     */
    public function __construct($guid, $strRoomIDs, $strRoomTypeIDs, \DateTime $ArrivalDate, \DateTime $DepartureDate)
    {
        $this->guid = $guid;
        $this->strRoomIDs = $strRoomIDs;
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityCalendar
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomIDs()
    {
        return $this->strRoomIDs;
    }

    /**
     * @param string $strRoomIDs
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityCalendar
     */
    public function setStrRoomIDs($strRoomIDs)
    {
        $this->strRoomIDs = $strRoomIDs;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomTypeIDs()
    {
        return $this->strRoomTypeIDs;
    }

    /**
     * @param string $strRoomTypeIDs
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityCalendar
     */
    public function setStrRoomTypeIDs($strRoomTypeIDs)
    {
        $this->strRoomTypeIDs = $strRoomTypeIDs;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        if ($this->ArrivalDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityCalendar
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        if ($this->DepartureDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DepartureDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \Gueststream\PMS\IQWare\API\getAllRoomsAvailabilityCalendar
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        return $this;
    }
}

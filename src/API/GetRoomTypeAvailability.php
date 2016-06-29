<?php

namespace Gueststream\PMS\IQWare\API;

class GetRoomTypeAvailability
{

    /**
     * @var int $RoomTypeID
     */
    protected $RoomTypeID = null;

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var \DateTime $start
     */
    protected $start = null;

    /**
     * @var \DateTime $end
     */
    protected $end = null;

    /**
     * @var boolean $isSuite
     */
    protected $isSuite = null;

    /**
     * @param int $RoomTypeID
     * @param int $guid
     * @param \DateTime $start
     * @param \DateTime $end
     * @param boolean $isSuite
     */
    public function __construct($RoomTypeID, $guid, \DateTime $start, \DateTime $end, $isSuite)
    {
        $this->RoomTypeID = $RoomTypeID;
        $this->guid = $guid;
        $this->start = $start->format(\DateTime::ATOM);
        $this->end = $end->format(\DateTime::ATOM);
        $this->isSuite = $isSuite;
    }

    /**
     * @return int
     */
    public function getRoomTypeID()
    {
        return $this->RoomTypeID;
    }

    /**
     * @param int $RoomTypeID
     * @return \Gueststream\PMS\IQWare\API\GetRoomTypeAvailability
     */
    public function setRoomTypeID($RoomTypeID)
    {
        $this->RoomTypeID = $RoomTypeID;
        return $this;
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
     * @return \Gueststream\PMS\IQWare\API\GetRoomTypeAvailability
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        if ($this->start == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->start);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $start
     * @return \Gueststream\PMS\IQWare\API\GetRoomTypeAvailability
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
        if ($this->end == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->end);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $end
     * @return \Gueststream\PMS\IQWare\API\GetRoomTypeAvailability
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSuite()
    {
        return $this->isSuite;
    }

    /**
     * @param boolean $isSuite
     * @return \Gueststream\PMS\IQWare\API\GetRoomTypeAvailability
     */
    public function setIsSuite($isSuite)
    {
        $this->isSuite = $isSuite;
        return $this;
    }
}

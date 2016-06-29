<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetOwnerRoomAvailability
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $roomID
     */
    protected $roomID = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var boolean $isSuite
     */
    protected $isSuite = null;

    /**
     * @param int $guid
     * @param int $roomID
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param boolean $isSuite
     */
    public function __construct($guid, $roomID, \DateTime $startDate, \DateTime $endDate, $isSuite)
    {
        $this->guid = $guid;
        $this->roomID = $roomID;
        $this->startDate = $startDate->format(\DateTime::ATOM);
        $this->endDate = $endDate->format(\DateTime::ATOM);
        $this->isSuite = $isSuite;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailability
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomID()
    {
        return $this->roomID;
    }

    /**
     * @param int $roomID
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailability
     */
    public function setRoomID($roomID)
    {
        $this->roomID = $roomID;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->startDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->startDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $startDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailability
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->endDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->endDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $endDate
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailability
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetOwnerRoomAvailability
     */
    public function setIsSuite($isSuite)
    {
        $this->isSuite = $isSuite;
        return $this;
    }
}

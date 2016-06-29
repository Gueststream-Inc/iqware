<?php

namespace Gueststream\PMS\IQWare\API;

class GetRoomsAndSuitesAvailability
{

    /**
     * @var int $intGuid
     */
    protected $intGuid = null;

    /**
     * @var \DateTime $startdate
     */
    protected $startdate = null;

    /**
     * @var \DateTime $enddate
     */
    protected $enddate = null;

    /**
     * @var int $roomTypeID
     */
    protected $roomTypeID = null;

    /**
     * @param int $intGuid
     * @param \DateTime $startdate
     * @param \DateTime $enddate
     * @param int $roomTypeID
     */
    public function __construct($intGuid, \DateTime $startdate, \DateTime $enddate, $roomTypeID)
    {
        $this->intGuid = $intGuid;
        $this->startdate = $startdate->format(\DateTime::ATOM);
        $this->enddate = $enddate->format(\DateTime::ATOM);
        $this->roomTypeID = $roomTypeID;
    }

    /**
     * @return int
     */
    public function getIntGuid()
    {
        return $this->intGuid;
    }

    /**
     * @param int $intGuid
     * @return \Gueststream\PMS\IQWare\API\GetRoomsAndSuitesAvailability
     */
    public function setIntGuid($intGuid)
    {
        $this->intGuid = $intGuid;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartdate()
    {
        if ($this->startdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->startdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $startdate
     * @return \Gueststream\PMS\IQWare\API\GetRoomsAndSuitesAvailability
     */
    public function setStartdate(\DateTime $startdate)
    {
        $this->startdate = $startdate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnddate()
    {
        if ($this->enddate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->enddate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $enddate
     * @return \Gueststream\PMS\IQWare\API\GetRoomsAndSuitesAvailability
     */
    public function setEnddate(\DateTime $enddate)
    {
        $this->enddate = $enddate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeID()
    {
        return $this->roomTypeID;
    }

    /**
     * @param int $roomTypeID
     * @return \Gueststream\PMS\IQWare\API\GetRoomsAndSuitesAvailability
     */
    public function setRoomTypeID($roomTypeID)
    {
        $this->roomTypeID = $roomTypeID;
        return $this;
    }
}

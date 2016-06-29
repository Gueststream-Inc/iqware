<?php

namespace Gueststream\PMS\IQWare\API;

class GetUnitWithoutAvailability
{

    /**
     * @var int $iGuid
     */
    protected $iGuid = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @param int $iGuid
     * @param int $ID_Room
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     */
    public function __construct($iGuid, $ID_Room, \DateTime $StartDate, \DateTime $EndDate)
    {
        $this->iGuid = $iGuid;
        $this->ID_Room = $ID_Room;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getIGuid()
    {
        return $this->iGuid;
    }

    /**
     * @param int $iGuid
     * @return \Gueststream\PMS\IQWare\API\GetUnitWithoutAvailability
     */
    public function setIGuid($iGuid)
    {
        $this->iGuid = $iGuid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Room()
    {
        return $this->ID_Room;
    }

    /**
     * @param int $ID_Room
     * @return \Gueststream\PMS\IQWare\API\GetUnitWithoutAvailability
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Gueststream\PMS\IQWare\API\GetUnitWithoutAvailability
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Gueststream\PMS\IQWare\API\GetUnitWithoutAvailability
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }
}

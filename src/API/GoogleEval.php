<?php

namespace Gueststream\PMS\IQWare\API;

class GoogleEval
{

    /**
     * @var int $intGUID
     */
    protected $intGUID = null;

    /**
     * @var string $RateCodes
     */
    protected $RateCodes = null;

    /**
     * @var string $RoomTypes
     */
    protected $RoomTypes = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var int $StayLength
     */
    protected $StayLength = null;

    /**
     * @var int $DayCount
     */
    protected $DayCount = null;

    /**
     * @param int $intGUID
     * @param string $RateCodes
     * @param string $RoomTypes
     * @param \DateTime $FromDate
     * @param int $StayLength
     * @param int $DayCount
     */
    public function __construct($intGUID, $RateCodes, $RoomTypes, \DateTime $FromDate, $StayLength, $DayCount)
    {
        $this->intGUID = $intGUID;
        $this->RateCodes = $RateCodes;
        $this->RoomTypes = $RoomTypes;
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        $this->StayLength = $StayLength;
        $this->DayCount = $DayCount;
    }

    /**
     * @return int
     */
    public function getIntGUID()
    {
        return $this->intGUID;
    }

    /**
     * @param int $intGUID
     * @return \Gueststream\PMS\IQWare\API\GoogleEval
     */
    public function setIntGUID($intGUID)
    {
        $this->intGUID = $intGUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateCodes()
    {
        return $this->RateCodes;
    }

    /**
     * @param string $RateCodes
     * @return \Gueststream\PMS\IQWare\API\GoogleEval
     */
    public function setRateCodes($RateCodes)
    {
        $this->RateCodes = $RateCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypes()
    {
        return $this->RoomTypes;
    }

    /**
     * @param string $RoomTypes
     * @return \Gueststream\PMS\IQWare\API\GoogleEval
     */
    public function setRoomTypes($RoomTypes)
    {
        $this->RoomTypes = $RoomTypes;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
        if ($this->FromDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->FromDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FromDate
     * @return \Gueststream\PMS\IQWare\API\GoogleEval
     */
    public function setFromDate(\DateTime $FromDate)
    {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getStayLength()
    {
        return $this->StayLength;
    }

    /**
     * @param int $StayLength
     * @return \Gueststream\PMS\IQWare\API\GoogleEval
     */
    public function setStayLength($StayLength)
    {
        $this->StayLength = $StayLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getDayCount()
    {
        return $this->DayCount;
    }

    /**
     * @param int $DayCount
     * @return \Gueststream\PMS\IQWare\API\GoogleEval
     */
    public function setDayCount($DayCount)
    {
        $this->DayCount = $DayCount;
        return $this;
    }
}

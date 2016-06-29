<?php

namespace Gueststream\PMS\IQWare\API;

class Evaluate
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var string $strRateCodes
     */
    protected $strRateCodes = null;

    /**
     * @var string $strRoomTypes
     */
    protected $strRoomTypes = null;

    /**
     * @var \DateTime $Arrival
     */
    protected $Arrival = null;

    /**
     * @var \DateTime $Departure
     */
    protected $Departure = null;

    /**
     * @var int $GuestCount
     */
    protected $GuestCount = null;

    /**
     * @var string $ChildAges
     */
    protected $ChildAges = null;

    /**
     * @var int $ID_RateSpecial
     */
    protected $ID_RateSpecial = null;

    /**
     * @param int $Guid
     * @param string $strRateCodes
     * @param string $strRoomTypes
     * @param \DateTime $Arrival
     * @param \DateTime $Departure
     * @param int $GuestCount
     * @param string $ChildAges
     * @param int $ID_RateSpecial
     */
    public function __construct($Guid, $strRateCodes, $strRoomTypes, \DateTime $Arrival, \DateTime $Departure, $GuestCount, $ChildAges, $ID_RateSpecial)
    {
        $this->Guid = $Guid;
        $this->strRateCodes = $strRateCodes;
        $this->strRoomTypes = $strRoomTypes;
        $this->Arrival = $Arrival->format(\DateTime::ATOM);
        $this->Departure = $Departure->format(\DateTime::ATOM);
        $this->GuestCount = $GuestCount;
        $this->ChildAges = $ChildAges;
        $this->ID_RateSpecial = $ID_RateSpecial;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->Guid;
    }

    /**
     * @param int $Guid
     * @return \Gueststream\PMS\IQWare\API\Evaluate
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRateCodes()
    {
        return $this->strRateCodes;
    }

    /**
     * @param string $strRateCodes
     * @return \Gueststream\PMS\IQWare\API\Evaluate
     */
    public function setStrRateCodes($strRateCodes)
    {
        $this->strRateCodes = $strRateCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getStrRoomTypes()
    {
        return $this->strRoomTypes;
    }

    /**
     * @param string $strRoomTypes
     * @return \Gueststream\PMS\IQWare\API\Evaluate
     */
    public function setStrRoomTypes($strRoomTypes)
    {
        $this->strRoomTypes = $strRoomTypes;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrival()
    {
        if ($this->Arrival == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Arrival);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Arrival
     * @return \Gueststream\PMS\IQWare\API\Evaluate
     */
    public function setArrival(\DateTime $Arrival)
    {
        $this->Arrival = $Arrival->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeparture()
    {
        if ($this->Departure == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Departure);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Departure
     * @return \Gueststream\PMS\IQWare\API\Evaluate
     */
    public function setDeparture(\DateTime $Departure)
    {
        $this->Departure = $Departure->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }

    /**
     * @param int $GuestCount
     * @return \Gueststream\PMS\IQWare\API\Evaluate
     */
    public function setGuestCount($GuestCount)
    {
        $this->GuestCount = $GuestCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getChildAges()
    {
        return $this->ChildAges;
    }

    /**
     * @param string $ChildAges
     * @return \Gueststream\PMS\IQWare\API\Evaluate
     */
    public function setChildAges($ChildAges)
    {
        $this->ChildAges = $ChildAges;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateSpecial()
    {
        return $this->ID_RateSpecial;
    }

    /**
     * @param int $ID_RateSpecial
     * @return \Gueststream\PMS\IQWare\API\Evaluate
     */
    public function setID_RateSpecial($ID_RateSpecial)
    {
        $this->ID_RateSpecial = $ID_RateSpecial;
        return $this;
    }
}

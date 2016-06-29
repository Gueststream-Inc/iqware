<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerReservation
{

    /**
     * @var \DateTime $Arrival
     */
    protected $Arrival = null;

    /**
     * @var \DateTime $Departure
     */
    protected $Departure = null;

    /**
     * @var int $NightCount
     */
    protected $NightCount = null;

    /**
     * @var int $GuestCount
     */
    protected $GuestCount = null;

    /**
     * @var int $CondoOwnerId
     */
    protected $CondoOwnerId = null;

    /**
     * @var int $AdminId
     */
    protected $AdminId = null;

    /**
     * @var ArrayOfShort $ChildrenAges
     */
    protected $ChildrenAges = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @param \DateTime $Arrival
     * @param \DateTime $Departure
     * @param int $NightCount
     * @param int $GuestCount
     * @param int $CondoOwnerId
     * @param int $AdminId
     */
    public function __construct(\DateTime $Arrival, \DateTime $Departure, $NightCount, $GuestCount, $CondoOwnerId, $AdminId)
    {
        $this->Arrival = $Arrival->format(\DateTime::ATOM);
        $this->Departure = $Departure->format(\DateTime::ATOM);
        $this->NightCount = $NightCount;
        $this->GuestCount = $GuestCount;
        $this->CondoOwnerId = $CondoOwnerId;
        $this->AdminId = $AdminId;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservation
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservation
     */
    public function setDeparture(\DateTime $Departure)
    {
        $this->Departure = $Departure->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getNightCount()
    {
        return $this->NightCount;
    }

    /**
     * @param int $NightCount
     * @return \Gueststream\PMS\IQWare\API\OwnerReservation
     */
    public function setNightCount($NightCount)
    {
        $this->NightCount = $NightCount;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerReservation
     */
    public function setGuestCount($GuestCount)
    {
        $this->GuestCount = $GuestCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCondoOwnerId()
    {
        return $this->CondoOwnerId;
    }

    /**
     * @param int $CondoOwnerId
     * @return \Gueststream\PMS\IQWare\API\OwnerReservation
     */
    public function setCondoOwnerId($CondoOwnerId)
    {
        $this->CondoOwnerId = $CondoOwnerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdminId()
    {
        return $this->AdminId;
    }

    /**
     * @param int $AdminId
     * @return \Gueststream\PMS\IQWare\API\OwnerReservation
     */
    public function setAdminId($AdminId)
    {
        $this->AdminId = $AdminId;
        return $this;
    }

    /**
     * @return ArrayOfShort
     */
    public function getChildrenAges()
    {
        return $this->ChildrenAges;
    }

    /**
     * @param ArrayOfShort $ChildrenAges
     * @return \Gueststream\PMS\IQWare\API\OwnerReservation
     */
    public function setChildrenAges($ChildrenAges)
    {
        $this->ChildrenAges = $ChildrenAges;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \Gueststream\PMS\IQWare\API\OwnerReservation
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }
}

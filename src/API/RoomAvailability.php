<?php

namespace Gueststream\PMS\IQWare\API;

class RoomAvailability
{

    /**
     * @var boolean $IsLeaseBack
     */
    protected $IsLeaseBack = null;

    /**
     * @var boolean $IsVirtual
     */
    protected $IsVirtual = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var ArrayOfRoomDayAvailability $Availability
     */
    protected $Availability = null;

    /**
     * @var OwnerReservationValidity $OwnerReservationValidity
     */
    protected $OwnerReservationValidity = null;

    /**
     * @var RoomRestrictionStatus $OwnerReservationRestrictionType
     */
    protected $OwnerReservationRestrictionType = null;

    /**
     * @var int $RateYield_MinLengthValidity
     */
    protected $RateYield_MinLengthValidity = null;

    /**
     * @param boolean $IsLeaseBack
     * @param boolean $IsVirtual
     * @param \DateTime $StartDate
     * @param \DateTime $EndDate
     * @param OwnerReservationValidity $OwnerReservationValidity
     * @param RoomRestrictionStatus $OwnerReservationRestrictionType
     * @param int $RateYield_MinLengthValidity
     */
    public function __construct($IsLeaseBack, $IsVirtual, \DateTime $StartDate, \DateTime $EndDate, $OwnerReservationValidity, $OwnerReservationRestrictionType, $RateYield_MinLengthValidity)
    {
        $this->IsLeaseBack = $IsLeaseBack;
        $this->IsVirtual = $IsVirtual;
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        $this->OwnerReservationValidity = $OwnerReservationValidity;
        $this->OwnerReservationRestrictionType = $OwnerReservationRestrictionType;
        $this->RateYield_MinLengthValidity = $RateYield_MinLengthValidity;
    }

    /**
     * @return boolean
     */
    public function getIsLeaseBack()
    {
        return $this->IsLeaseBack;
    }

    /**
     * @param boolean $IsLeaseBack
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
     */
    public function setIsLeaseBack($IsLeaseBack)
    {
        $this->IsLeaseBack = $IsLeaseBack;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVirtual()
    {
        return $this->IsVirtual;
    }

    /**
     * @param boolean $IsVirtual
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
     */
    public function setIsVirtual($IsVirtual)
    {
        $this->IsVirtual = $IsVirtual;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param string $RoomNo
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
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
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfRoomDayAvailability
     */
    public function getAvailability()
    {
        return $this->Availability;
    }

    /**
     * @param ArrayOfRoomDayAvailability $Availability
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
     */
    public function setAvailability($Availability)
    {
        $this->Availability = $Availability;
        return $this;
    }

    /**
     * @return OwnerReservationValidity
     */
    public function getOwnerReservationValidity()
    {
        return $this->OwnerReservationValidity;
    }

    /**
     * @param OwnerReservationValidity $OwnerReservationValidity
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
     */
    public function setOwnerReservationValidity($OwnerReservationValidity)
    {
        $this->OwnerReservationValidity = $OwnerReservationValidity;
        return $this;
    }

    /**
     * @return RoomRestrictionStatus
     */
    public function getOwnerReservationRestrictionType()
    {
        return $this->OwnerReservationRestrictionType;
    }

    /**
     * @param RoomRestrictionStatus $OwnerReservationRestrictionType
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
     */
    public function setOwnerReservationRestrictionType($OwnerReservationRestrictionType)
    {
        $this->OwnerReservationRestrictionType = $OwnerReservationRestrictionType;
        return $this;
    }

    /**
     * @return int
     */
    public function getRateYield_MinLengthValidity()
    {
        return $this->RateYield_MinLengthValidity;
    }

    /**
     * @param int $RateYield_MinLengthValidity
     * @return \Gueststream\PMS\IQWare\API\RoomAvailability
     */
    public function setRateYield_MinLengthValidity($RateYield_MinLengthValidity)
    {
        $this->RateYield_MinLengthValidity = $RateYield_MinLengthValidity;
        return $this;
    }
}

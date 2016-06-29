<?php

namespace Gueststream\PMS\IQWare\API;

class RoomDayAvailability
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var BookingCondoType $BookingCondoType
     */
    protected $BookingCondoType = null;

    /**
     * @var RoomRestrictionStatus $RestrictionStatus
     */
    protected $RestrictionStatus = null;

    /**
     * @var RoomSoldStatus $SoldStatus
     */
    protected $SoldStatus = null;

    /**
     * @var int $RoomTypeQuantity
     */
    protected $RoomTypeQuantity = null;

    /**
     * @var boolean $RateYield_IsClosed
     */
    protected $RateYield_IsClosed = null;

    /**
     * @var boolean $RateYield_IsOnArrival
     */
    protected $RateYield_IsOnArrival = null;

    /**
     * @var int $RateYield_MinLength
     */
    protected $RateYield_MinLength = null;

    /**
     * @var boolean $RateRoomYield_IsSet
     */
    protected $RateRoomYield_IsSet = null;

    /**
     * @var boolean $RateRoomYield_IsOnArrival
     */
    protected $RateRoomYield_IsOnArrival = null;

    /**
     * @var int $RateRoomYield_MinLenght
     */
    protected $RateRoomYield_MinLenght = null;

    /**
     * @param \DateTime $Date
     * @param BookingCondoType $BookingCondoType
     * @param RoomRestrictionStatus $RestrictionStatus
     * @param RoomSoldStatus $SoldStatus
     * @param int $RoomTypeQuantity
     * @param boolean $RateYield_IsClosed
     * @param boolean $RateYield_IsOnArrival
     * @param int $RateYield_MinLength
     * @param boolean $RateRoomYield_IsSet
     * @param boolean $RateRoomYield_IsOnArrival
     * @param int $RateRoomYield_MinLenght
     */
    public function __construct(\DateTime $Date, $BookingCondoType, $RestrictionStatus, $SoldStatus, $RoomTypeQuantity, $RateYield_IsClosed, $RateYield_IsOnArrival, $RateYield_MinLength, $RateRoomYield_IsSet, $RateRoomYield_IsOnArrival, $RateRoomYield_MinLenght)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        $this->BookingCondoType = $BookingCondoType;
        $this->RestrictionStatus = $RestrictionStatus;
        $this->SoldStatus = $SoldStatus;
        $this->RoomTypeQuantity = $RoomTypeQuantity;
        $this->RateYield_IsClosed = $RateYield_IsClosed;
        $this->RateYield_IsOnArrival = $RateYield_IsOnArrival;
        $this->RateYield_MinLength = $RateYield_MinLength;
        $this->RateRoomYield_IsSet = $RateRoomYield_IsSet;
        $this->RateRoomYield_IsOnArrival = $RateRoomYield_IsOnArrival;
        $this->RateRoomYield_MinLenght = $RateRoomYield_MinLenght;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return BookingCondoType
     */
    public function getBookingCondoType()
    {
        return $this->BookingCondoType;
    }

    /**
     * @param BookingCondoType $BookingCondoType
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setBookingCondoType($BookingCondoType)
    {
        $this->BookingCondoType = $BookingCondoType;
        return $this;
    }

    /**
     * @return RoomRestrictionStatus
     */
    public function getRestrictionStatus()
    {
        return $this->RestrictionStatus;
    }

    /**
     * @param RoomRestrictionStatus $RestrictionStatus
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setRestrictionStatus($RestrictionStatus)
    {
        $this->RestrictionStatus = $RestrictionStatus;
        return $this;
    }

    /**
     * @return RoomSoldStatus
     */
    public function getSoldStatus()
    {
        return $this->SoldStatus;
    }

    /**
     * @param RoomSoldStatus $SoldStatus
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setSoldStatus($SoldStatus)
    {
        $this->SoldStatus = $SoldStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeQuantity()
    {
        return $this->RoomTypeQuantity;
    }

    /**
     * @param int $RoomTypeQuantity
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setRoomTypeQuantity($RoomTypeQuantity)
    {
        $this->RoomTypeQuantity = $RoomTypeQuantity;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRateYield_IsClosed()
    {
        return $this->RateYield_IsClosed;
    }

    /**
     * @param boolean $RateYield_IsClosed
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setRateYield_IsClosed($RateYield_IsClosed)
    {
        $this->RateYield_IsClosed = $RateYield_IsClosed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRateYield_IsOnArrival()
    {
        return $this->RateYield_IsOnArrival;
    }

    /**
     * @param boolean $RateYield_IsOnArrival
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setRateYield_IsOnArrival($RateYield_IsOnArrival)
    {
        $this->RateYield_IsOnArrival = $RateYield_IsOnArrival;
        return $this;
    }

    /**
     * @return int
     */
    public function getRateYield_MinLength()
    {
        return $this->RateYield_MinLength;
    }

    /**
     * @param int $RateYield_MinLength
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setRateYield_MinLength($RateYield_MinLength)
    {
        $this->RateYield_MinLength = $RateYield_MinLength;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRateRoomYield_IsSet()
    {
        return $this->RateRoomYield_IsSet;
    }

    /**
     * @param boolean $RateRoomYield_IsSet
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setRateRoomYield_IsSet($RateRoomYield_IsSet)
    {
        $this->RateRoomYield_IsSet = $RateRoomYield_IsSet;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRateRoomYield_IsOnArrival()
    {
        return $this->RateRoomYield_IsOnArrival;
    }

    /**
     * @param boolean $RateRoomYield_IsOnArrival
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setRateRoomYield_IsOnArrival($RateRoomYield_IsOnArrival)
    {
        $this->RateRoomYield_IsOnArrival = $RateRoomYield_IsOnArrival;
        return $this;
    }

    /**
     * @return int
     */
    public function getRateRoomYield_MinLenght()
    {
        return $this->RateRoomYield_MinLenght;
    }

    /**
     * @param int $RateRoomYield_MinLenght
     * @return \Gueststream\PMS\IQWare\API\RoomDayAvailability
     */
    public function setRateRoomYield_MinLenght($RateRoomYield_MinLenght)
    {
        $this->RateRoomYield_MinLenght = $RateRoomYield_MinLenght;
        return $this;
    }
}

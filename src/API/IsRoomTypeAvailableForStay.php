<?php

namespace Gueststream\PMS\IQWare\API;

class IsRoomTypeAvailableForStay
{

    /**
     * @var int $Guid
     */
    protected $Guid = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var int $GuestCount
     */
    protected $GuestCount = null;

    /**
     * @var string $Childrens
     */
    protected $Childrens = null;

    /**
     * @var string $ISOLanguageCode
     */
    protected $ISOLanguageCode = null;

    /**
     * @var int $RoomQty
     */
    protected $RoomQty = null;

    /**
     * @var int $ID_Group
     */
    protected $ID_Group = null;

    /**
     * @param int $Guid
     * @param int $ID_CondoOwner
     * @param int $ID_Room
     * @param int $ID_RoomType
     * @param int $ID_RateCode
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     * @param int $GuestCount
     * @param string $Childrens
     * @param string $ISOLanguageCode
     * @param int $RoomQty
     * @param int $ID_Group
     */
    public function __construct($Guid, $ID_CondoOwner, $ID_Room, $ID_RoomType, $ID_RateCode, \DateTime $ArrivalDate, \DateTime $DepartureDate, $GuestCount, $Childrens, $ISOLanguageCode, $RoomQty, $ID_Group)
    {
        $this->Guid = $Guid;
        $this->ID_CondoOwner = $ID_CondoOwner;
        $this->ID_Room = $ID_Room;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_RateCode = $ID_RateCode;
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
        $this->GuestCount = $GuestCount;
        $this->Childrens = $Childrens;
        $this->ISOLanguageCode = $ISOLanguageCode;
        $this->RoomQty = $RoomQty;
        $this->ID_Group = $ID_Group;
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
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setGuid($Guid)
    {
        $this->Guid = $Guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
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
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomType()
    {
        return $this->ID_RoomType;
    }

    /**
     * @param int $ID_RoomType
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
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
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
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
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setGuestCount($GuestCount)
    {
        $this->GuestCount = $GuestCount;
        return $this;
    }

    /**
     * @return string
     */
    public function getChildrens()
    {
        return $this->Childrens;
    }

    /**
     * @param string $Childrens
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setChildrens($Childrens)
    {
        $this->Childrens = $Childrens;
        return $this;
    }

    /**
     * @return string
     */
    public function getISOLanguageCode()
    {
        return $this->ISOLanguageCode;
    }

    /**
     * @param string $ISOLanguageCode
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setISOLanguageCode($ISOLanguageCode)
    {
        $this->ISOLanguageCode = $ISOLanguageCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomQty()
    {
        return $this->RoomQty;
    }

    /**
     * @param int $RoomQty
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setRoomQty($RoomQty)
    {
        $this->RoomQty = $RoomQty;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Group()
    {
        return $this->ID_Group;
    }

    /**
     * @param int $ID_Group
     * @return \Gueststream\PMS\IQWare\API\IsRoomTypeAvailableForStay
     */
    public function setID_Group($ID_Group)
    {
        $this->ID_Group = $ID_Group;
        return $this;
    }
}

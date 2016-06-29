<?php

namespace Gueststream\PMS\IQWare\API;

class UnitAvailable
{

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_Address
     */
    protected $ID_Address = null;

    /**
     * @var int $ID_Bedding
     */
    protected $ID_Bedding = null;

    /**
     * @var int $ID_Floor
     */
    protected $ID_Floor = null;

    /**
     * @var \DateTime $ADate
     */
    protected $ADate = null;

    /**
     * @var boolean $IsAvailable
     */
    protected $IsAvailable = null;

    /**
     * @var int $RoomCategory
     */
    protected $RoomCategory = null;

    /**
     * @param int $ID_Room
     * @param int $ID_RoomType
     * @param int $ID_Address
     * @param int $ID_Bedding
     * @param int $ID_Floor
     * @param \DateTime $ADate
     * @param boolean $IsAvailable
     * @param int $RoomCategory
     */
    public function __construct($ID_Room, $ID_RoomType, $ID_Address, $ID_Bedding, $ID_Floor, \DateTime $ADate, $IsAvailable, $RoomCategory)
    {
        $this->ID_Room = $ID_Room;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_Address = $ID_Address;
        $this->ID_Bedding = $ID_Bedding;
        $this->ID_Floor = $ID_Floor;
        $this->ADate = $ADate->format(\DateTime::ATOM);
        $this->IsAvailable = $IsAvailable;
        $this->RoomCategory = $RoomCategory;
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
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
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
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
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
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Address()
    {
        return $this->ID_Address;
    }

    /**
     * @param int $ID_Address
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setID_Address($ID_Address)
    {
        $this->ID_Address = $ID_Address;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Bedding()
    {
        return $this->ID_Bedding;
    }

    /**
     * @param int $ID_Bedding
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setID_Bedding($ID_Bedding)
    {
        $this->ID_Bedding = $ID_Bedding;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Floor()
    {
        return $this->ID_Floor;
    }

    /**
     * @param int $ID_Floor
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setID_Floor($ID_Floor)
    {
        $this->ID_Floor = $ID_Floor;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getADate()
    {
        if ($this->ADate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ADate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ADate
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setADate(\DateTime $ADate)
    {
        $this->ADate = $ADate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAvailable()
    {
        return $this->IsAvailable;
    }

    /**
     * @param boolean $IsAvailable
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setIsAvailable($IsAvailable)
    {
        $this->IsAvailable = $IsAvailable;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomCategory()
    {
        return $this->RoomCategory;
    }

    /**
     * @param int $RoomCategory
     * @return \Gueststream\PMS\IQWare\API\UnitAvailable
     */
    public function setRoomCategory($RoomCategory)
    {
        $this->RoomCategory = $RoomCategory;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class SuiteItems
{

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_Building
     */
    protected $ID_Building = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var string $OldRoomNo
     */
    protected $OldRoomNo = null;

    /**
     * @var string $OptionalRoomName
     */
    protected $OptionalRoomName = null;

    /**
     * @var boolean $IsMainRoom
     */
    protected $IsMainRoom = null;

    /**
     * @var int $ID_AccommodationType
     */
    protected $ID_AccommodationType = null;

    /**
     * @var int $ID_Floor
     */
    protected $ID_Floor = null;

    /**
     * @var string $FloorNo
     */
    protected $FloorNo = null;

    /**
     * @var int $ID_Bedding
     */
    protected $ID_Bedding = null;

    /**
     * @var ArrayOfInt $RoomAttributeIDs
     */
    protected $RoomAttributeIDs = null;

    /**
     * @var ArrayOfInt $RoomLocationIDs
     */
    protected $RoomLocationIDs = null;

    /**
     * @param int $ID_Room
     * @param int $ID_RoomType
     * @param int $ID_Building
     * @param boolean $IsMainRoom
     * @param int $ID_AccommodationType
     * @param int $ID_Floor
     * @param int $ID_Bedding
     */
    public function __construct($ID_Room, $ID_RoomType, $ID_Building, $IsMainRoom, $ID_AccommodationType, $ID_Floor, $ID_Bedding)
    {
        $this->ID_Room = $ID_Room;
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_Building = $ID_Building;
        $this->IsMainRoom = $IsMainRoom;
        $this->ID_AccommodationType = $ID_AccommodationType;
        $this->ID_Floor = $ID_Floor;
        $this->ID_Bedding = $ID_Bedding;
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
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
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
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Building()
    {
        return $this->ID_Building;
    }

    /**
     * @param int $ID_Building
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setID_Building($ID_Building)
    {
        $this->ID_Building = $ID_Building;
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
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOldRoomNo()
    {
        return $this->OldRoomNo;
    }

    /**
     * @param string $OldRoomNo
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setOldRoomNo($OldRoomNo)
    {
        $this->OldRoomNo = $OldRoomNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptionalRoomName()
    {
        return $this->OptionalRoomName;
    }

    /**
     * @param string $OptionalRoomName
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setOptionalRoomName($OptionalRoomName)
    {
        $this->OptionalRoomName = $OptionalRoomName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMainRoom()
    {
        return $this->IsMainRoom;
    }

    /**
     * @param boolean $IsMainRoom
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setIsMainRoom($IsMainRoom)
    {
        $this->IsMainRoom = $IsMainRoom;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_AccommodationType()
    {
        return $this->ID_AccommodationType;
    }

    /**
     * @param int $ID_AccommodationType
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setID_AccommodationType($ID_AccommodationType)
    {
        $this->ID_AccommodationType = $ID_AccommodationType;
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
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setID_Floor($ID_Floor)
    {
        $this->ID_Floor = $ID_Floor;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloorNo()
    {
        return $this->FloorNo;
    }

    /**
     * @param string $FloorNo
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setFloorNo($FloorNo)
    {
        $this->FloorNo = $FloorNo;
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
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setID_Bedding($ID_Bedding)
    {
        $this->ID_Bedding = $ID_Bedding;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomAttributeIDs()
    {
        return $this->RoomAttributeIDs;
    }

    /**
     * @param ArrayOfInt $RoomAttributeIDs
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setRoomAttributeIDs($RoomAttributeIDs)
    {
        $this->RoomAttributeIDs = $RoomAttributeIDs;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomLocationIDs()
    {
        return $this->RoomLocationIDs;
    }

    /**
     * @param ArrayOfInt $RoomLocationIDs
     * @return \Gueststream\PMS\IQWare\API\SuiteItems
     */
    public function setRoomLocationIDs($RoomLocationIDs)
    {
        $this->RoomLocationIDs = $RoomLocationIDs;
        return $this;
    }
}

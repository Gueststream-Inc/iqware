<?php

namespace Gueststream\PMS\IQWare\API;

class RoomTypeBuildingsAndPL
{

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var string $RoomTypeName
     */
    protected $RoomTypeName = null;

    /**
     * @var string $RoomTypeDescription
     */
    protected $RoomTypeDescription = null;

    /**
     * @var int $GuestMax
     */
    protected $GuestMax = null;

    /**
     * @var ArrayOfInt $Buildings
     */
    protected $Buildings = null;

    /**
     * @var ArrayOfInt $DepartmentalPLs
     */
    protected $DepartmentalPLs = null;

    /**
     * @param int $ID_RoomType
     * @param int $GuestMax
     */
    public function __construct($ID_RoomType, $GuestMax)
    {
        $this->ID_RoomType = $ID_RoomType;
        $this->GuestMax = $GuestMax;
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
     * @return \Gueststream\PMS\IQWare\API\RoomTypeBuildingsAndPL
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeName()
    {
        return $this->RoomTypeName;
    }

    /**
     * @param string $RoomTypeName
     * @return \Gueststream\PMS\IQWare\API\RoomTypeBuildingsAndPL
     */
    public function setRoomTypeName($RoomTypeName)
    {
        $this->RoomTypeName = $RoomTypeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeDescription()
    {
        return $this->RoomTypeDescription;
    }

    /**
     * @param string $RoomTypeDescription
     * @return \Gueststream\PMS\IQWare\API\RoomTypeBuildingsAndPL
     */
    public function setRoomTypeDescription($RoomTypeDescription)
    {
        $this->RoomTypeDescription = $RoomTypeDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getGuestMax()
    {
        return $this->GuestMax;
    }

    /**
     * @param int $GuestMax
     * @return \Gueststream\PMS\IQWare\API\RoomTypeBuildingsAndPL
     */
    public function setGuestMax($GuestMax)
    {
        $this->GuestMax = $GuestMax;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getBuildings()
    {
        return $this->Buildings;
    }

    /**
     * @param ArrayOfInt $Buildings
     * @return \Gueststream\PMS\IQWare\API\RoomTypeBuildingsAndPL
     */
    public function setBuildings($Buildings)
    {
        $this->Buildings = $Buildings;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getDepartmentalPLs()
    {
        return $this->DepartmentalPLs;
    }

    /**
     * @param ArrayOfInt $DepartmentalPLs
     * @return \Gueststream\PMS\IQWare\API\RoomTypeBuildingsAndPL
     */
    public function setDepartmentalPLs($DepartmentalPLs)
    {
        $this->DepartmentalPLs = $DepartmentalPLs;
        return $this;
    }
}

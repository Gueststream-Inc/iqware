<?php

namespace Gueststream\PMS\IQWare\API;

class RoomTypeAvailability
{

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var int $ID_Building
     */
    protected $ID_Building = null;

    /**
     * @var ArrayOfShort $Inventory
     */
    protected $Inventory = null;

    /**
     * @param int $ID_RoomType
     * @param int $ID_Building
     */
    public function __construct($ID_RoomType, $ID_Building)
    {
        $this->ID_RoomType = $ID_RoomType;
        $this->ID_Building = $ID_Building;
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
     * @return \Gueststream\PMS\IQWare\API\RoomTypeAvailability
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
     * @return \Gueststream\PMS\IQWare\API\RoomTypeAvailability
     */
    public function setID_Building($ID_Building)
    {
        $this->ID_Building = $ID_Building;
        return $this;
    }

    /**
     * @return ArrayOfShort
     */
    public function getInventory()
    {
        return $this->Inventory;
    }

    /**
     * @param ArrayOfShort $Inventory
     * @return \Gueststream\PMS\IQWare\API\RoomTypeAvailability
     */
    public function setInventory($Inventory)
    {
        $this->Inventory = $Inventory;
        return $this;
    }
}

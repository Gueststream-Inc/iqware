<?php

namespace Gueststream\PMS\IQWare\API;

class InventoryResult
{

    /**
     * @var ArrayOfRoomInventory $Rooms
     */
    protected $Rooms = null;

    /**
     * @var ArrayOfSuiteInventory $Suites
     */
    protected $Suites = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRoomInventory
     */
    public function getRooms()
    {
        return $this->Rooms;
    }

    /**
     * @param ArrayOfRoomInventory $Rooms
     * @return \Gueststream\PMS\IQWare\API\InventoryResult
     */
    public function setRooms($Rooms)
    {
        $this->Rooms = $Rooms;
        return $this;
    }

    /**
     * @return ArrayOfSuiteInventory
     */
    public function getSuites()
    {
        return $this->Suites;
    }

    /**
     * @param ArrayOfSuiteInventory $Suites
     * @return \Gueststream\PMS\IQWare\API\InventoryResult
     */
    public function setSuites($Suites)
    {
        $this->Suites = $Suites;
        return $this;
    }
}

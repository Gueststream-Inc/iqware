<?php

namespace Gueststream\PMS\IQWare\API;

class InventoryResponse
{

    /**
     * @var ArrayOfRoomInventory $AvailableRooms
     */
    protected $AvailableRooms = null;

    /**
     * @var ArrayOfSuiteInventory $AvailableSuites
     */
    protected $AvailableSuites = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRoomInventory
     */
    public function getAvailableRooms()
    {
        return $this->AvailableRooms;
    }

    /**
     * @param ArrayOfRoomInventory $AvailableRooms
     * @return \Gueststream\PMS\IQWare\API\InventoryResponse
     */
    public function setAvailableRooms($AvailableRooms)
    {
        $this->AvailableRooms = $AvailableRooms;
        return $this;
    }

    /**
     * @return ArrayOfSuiteInventory
     */
    public function getAvailableSuites()
    {
        return $this->AvailableSuites;
    }

    /**
     * @param ArrayOfSuiteInventory $AvailableSuites
     * @return \Gueststream\PMS\IQWare\API\InventoryResponse
     */
    public function setAvailableSuites($AvailableSuites)
    {
        $this->AvailableSuites = $AvailableSuites;
        return $this;
    }
}

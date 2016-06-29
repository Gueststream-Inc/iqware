<?php

namespace Gueststream\PMS\IQWare\API;

class AvailableRoom
{

    /**
     * @var int $ID_Building
     */
    protected $ID_Building = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var float $Revenue
     */
    protected $Revenue = null;

    /**
     * @var boolean $HasRefusals
     */
    protected $HasRefusals = null;

    /**
     * @var ArrayOfRefusal $Refusals
     */
    protected $Refusals = null;

    /**
     * @var int $MinHSKLevel
     */
    protected $MinHSKLevel = null;

    /**
     * @param int $ID_Building
     * @param int $ID_Room
     * @param float $Revenue
     * @param boolean $HasRefusals
     * @param int $MinHSKLevel
     */
    public function __construct($ID_Building, $ID_Room, $Revenue, $HasRefusals, $MinHSKLevel)
    {
        $this->ID_Building = $ID_Building;
        $this->ID_Room = $ID_Room;
        $this->Revenue = $Revenue;
        $this->HasRefusals = $HasRefusals;
        $this->MinHSKLevel = $MinHSKLevel;
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
     * @return \Gueststream\PMS\IQWare\API\AvailableRoom
     */
    public function setID_Building($ID_Building)
    {
        $this->ID_Building = $ID_Building;
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
     * @return \Gueststream\PMS\IQWare\API\AvailableRoom
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevenue()
    {
        return $this->Revenue;
    }

    /**
     * @param float $Revenue
     * @return \Gueststream\PMS\IQWare\API\AvailableRoom
     */
    public function setRevenue($Revenue)
    {
        $this->Revenue = $Revenue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasRefusals()
    {
        return $this->HasRefusals;
    }

    /**
     * @param boolean $HasRefusals
     * @return \Gueststream\PMS\IQWare\API\AvailableRoom
     */
    public function setHasRefusals($HasRefusals)
    {
        $this->HasRefusals = $HasRefusals;
        return $this;
    }

    /**
     * @return ArrayOfRefusal
     */
    public function getRefusals()
    {
        return $this->Refusals;
    }

    /**
     * @param ArrayOfRefusal $Refusals
     * @return \Gueststream\PMS\IQWare\API\AvailableRoom
     */
    public function setRefusals($Refusals)
    {
        $this->Refusals = $Refusals;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinHSKLevel()
    {
        return $this->MinHSKLevel;
    }

    /**
     * @param int $MinHSKLevel
     * @return \Gueststream\PMS\IQWare\API\AvailableRoom
     */
    public function setMinHSKLevel($MinHSKLevel)
    {
        $this->MinHSKLevel = $MinHSKLevel;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class AvailableSuite
{

    /**
     * @var int $ID_SuiteConfiguration
     */
    protected $ID_SuiteConfiguration = null;

    /**
     * @var float $Revenue
     */
    protected $Revenue = null;

    /**
     * @var boolean $HasRefusals
     */
    protected $HasRefusals = null;

    /**
     * @var int $MainID_Room
     */
    protected $MainID_Room = null;

    /**
     * @var ArrayOfRefusal $Refusals
     */
    protected $Refusals = null;

    /**
     * @var int $MyProperty
     */
    protected $MyProperty = null;

    /**
     * @var int $MinHSKLevel
     */
    protected $MinHSKLevel = null;

    /**
     * @param int $ID_SuiteConfiguration
     * @param float $Revenue
     * @param boolean $HasRefusals
     * @param int $MainID_Room
     * @param int $MyProperty
     * @param int $MinHSKLevel
     */
    public function __construct($ID_SuiteConfiguration, $Revenue, $HasRefusals, $MainID_Room, $MyProperty, $MinHSKLevel)
    {
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
        $this->Revenue = $Revenue;
        $this->HasRefusals = $HasRefusals;
        $this->MainID_Room = $MainID_Room;
        $this->MyProperty = $MyProperty;
        $this->MinHSKLevel = $MinHSKLevel;
    }

    /**
     * @return int
     */
    public function getID_SuiteConfiguration()
    {
        return $this->ID_SuiteConfiguration;
    }

    /**
     * @param int $ID_SuiteConfiguration
     * @return \Gueststream\PMS\IQWare\API\AvailableSuite
     */
    public function setID_SuiteConfiguration($ID_SuiteConfiguration)
    {
        $this->ID_SuiteConfiguration = $ID_SuiteConfiguration;
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
     * @return \Gueststream\PMS\IQWare\API\AvailableSuite
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
     * @return \Gueststream\PMS\IQWare\API\AvailableSuite
     */
    public function setHasRefusals($HasRefusals)
    {
        $this->HasRefusals = $HasRefusals;
        return $this;
    }

    /**
     * @return int
     */
    public function getMainID_Room()
    {
        return $this->MainID_Room;
    }

    /**
     * @param int $MainID_Room
     * @return \Gueststream\PMS\IQWare\API\AvailableSuite
     */
    public function setMainID_Room($MainID_Room)
    {
        $this->MainID_Room = $MainID_Room;
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
     * @return \Gueststream\PMS\IQWare\API\AvailableSuite
     */
    public function setRefusals($Refusals)
    {
        $this->Refusals = $Refusals;
        return $this;
    }

    /**
     * @return int
     */
    public function getMyProperty()
    {
        return $this->MyProperty;
    }

    /**
     * @param int $MyProperty
     * @return \Gueststream\PMS\IQWare\API\AvailableSuite
     */
    public function setMyProperty($MyProperty)
    {
        $this->MyProperty = $MyProperty;
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
     * @return \Gueststream\PMS\IQWare\API\AvailableSuite
     */
    public function setMinHSKLevel($MinHSKLevel)
    {
        $this->MinHSKLevel = $MinHSKLevel;
        return $this;
    }
}

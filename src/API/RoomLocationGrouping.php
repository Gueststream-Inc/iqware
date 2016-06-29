<?php

namespace Gueststream\PMS\IQWare\API;

class RoomLocationGrouping
{

    /**
     * @var int $ID_RoomLocationGrouping
     */
    protected $ID_RoomLocationGrouping = null;

    /**
     * @var string $GroupingName
     */
    protected $GroupingName = null;

    /**
     * @var ArrayOfInt $RoomLocations
     */
    protected $RoomLocations = null;

    /**
     * @param int $ID_RoomLocationGrouping
     */
    public function __construct($ID_RoomLocationGrouping)
    {
        $this->ID_RoomLocationGrouping = $ID_RoomLocationGrouping;
    }

    /**
     * @return int
     */
    public function getID_RoomLocationGrouping()
    {
        return $this->ID_RoomLocationGrouping;
    }

    /**
     * @param int $ID_RoomLocationGrouping
     * @return \Gueststream\PMS\IQWare\API\RoomLocationGrouping
     */
    public function setID_RoomLocationGrouping($ID_RoomLocationGrouping)
    {
        $this->ID_RoomLocationGrouping = $ID_RoomLocationGrouping;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupingName()
    {
        return $this->GroupingName;
    }

    /**
     * @param string $GroupingName
     * @return \Gueststream\PMS\IQWare\API\RoomLocationGrouping
     */
    public function setGroupingName($GroupingName)
    {
        $this->GroupingName = $GroupingName;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomLocations()
    {
        return $this->RoomLocations;
    }

    /**
     * @param ArrayOfInt $RoomLocations
     * @return \Gueststream\PMS\IQWare\API\RoomLocationGrouping
     */
    public function setRoomLocations($RoomLocations)
    {
        $this->RoomLocations = $RoomLocations;
        return $this;
    }
}

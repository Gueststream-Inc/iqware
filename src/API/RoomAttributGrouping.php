<?php

namespace Gueststream\PMS\IQWare\API;

class RoomAttributGrouping
{

    /**
     * @var int $ID_RoomAttributGrouping
     */
    protected $ID_RoomAttributGrouping = null;

    /**
     * @var string $GroupingName
     */
    protected $GroupingName = null;

    /**
     * @var ArrayOfInt $RoomAttributes
     */
    protected $RoomAttributes = null;

    /**
     * @param int $ID_RoomAttributGrouping
     */
    public function __construct($ID_RoomAttributGrouping)
    {
        $this->ID_RoomAttributGrouping = $ID_RoomAttributGrouping;
    }

    /**
     * @return int
     */
    public function getID_RoomAttributGrouping()
    {
        return $this->ID_RoomAttributGrouping;
    }

    /**
     * @param int $ID_RoomAttributGrouping
     * @return \Gueststream\PMS\IQWare\API\RoomAttributGrouping
     */
    public function setID_RoomAttributGrouping($ID_RoomAttributGrouping)
    {
        $this->ID_RoomAttributGrouping = $ID_RoomAttributGrouping;
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
     * @return \Gueststream\PMS\IQWare\API\RoomAttributGrouping
     */
    public function setGroupingName($GroupingName)
    {
        $this->GroupingName = $GroupingName;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomAttributes()
    {
        return $this->RoomAttributes;
    }

    /**
     * @param ArrayOfInt $RoomAttributes
     * @return \Gueststream\PMS\IQWare\API\RoomAttributGrouping
     */
    public function setRoomAttributes($RoomAttributes)
    {
        $this->RoomAttributes = $RoomAttributes;
        return $this;
    }
}

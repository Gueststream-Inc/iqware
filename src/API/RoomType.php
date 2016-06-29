<?php

namespace Gueststream\PMS\IQWare\API;

class RoomType
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
     * @var ArrayOfDetail $ApplicableDatesAndValues
     */
    protected $ApplicableDatesAndValues = null;

    /**
     * @param int $ID_RoomType
     */
    public function __construct($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
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
     * @return \Gueststream\PMS\IQWare\API\RoomType
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
     * @return \Gueststream\PMS\IQWare\API\RoomType
     */
    public function setRoomTypeName($RoomTypeName)
    {
        $this->RoomTypeName = $RoomTypeName;
        return $this;
    }

    /**
     * @return ArrayOfDetail
     */
    public function getApplicableDatesAndValues()
    {
        return $this->ApplicableDatesAndValues;
    }

    /**
     * @param ArrayOfDetail $ApplicableDatesAndValues
     * @return \Gueststream\PMS\IQWare\API\RoomType
     */
    public function setApplicableDatesAndValues($ApplicableDatesAndValues)
    {
        $this->ApplicableDatesAndValues = $ApplicableDatesAndValues;
        return $this;
    }
}

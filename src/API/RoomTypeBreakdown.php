<?php

namespace Gueststream\PMS\IQWare\API;

class RoomTypeBreakdown
{

    /**
     * @var int $ID_RoomType
     */
    protected $ID_RoomType = null;

    /**
     * @var ArrayOfAvailabilityOverview $AvailabilityOverview
     */
    protected $AvailabilityOverview = null;

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
     * @return \Gueststream\PMS\IQWare\API\RoomTypeBreakdown
     */
    public function setID_RoomType($ID_RoomType)
    {
        $this->ID_RoomType = $ID_RoomType;
        return $this;
    }

    /**
     * @return ArrayOfAvailabilityOverview
     */
    public function getAvailabilityOverview()
    {
        return $this->AvailabilityOverview;
    }

    /**
     * @param ArrayOfAvailabilityOverview $AvailabilityOverview
     * @return \Gueststream\PMS\IQWare\API\RoomTypeBreakdown
     */
    public function setAvailabilityOverview($AvailabilityOverview)
    {
        $this->AvailabilityOverview = $AvailabilityOverview;
        return $this;
    }
}

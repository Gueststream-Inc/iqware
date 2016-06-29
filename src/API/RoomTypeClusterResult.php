<?php

namespace Gueststream\PMS\IQWare\API;

class RoomTypeClusterResult
{

    /**
     * @var ArrayOfRoomTypeCluster $RoomTypeClusters
     */
    protected $RoomTypeClusters = null;

    /**
     * @var ArrayOfInt $UnAssociatedRoomTypeIds
     */
    protected $UnAssociatedRoomTypeIds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRoomTypeCluster
     */
    public function getRoomTypeClusters()
    {
        return $this->RoomTypeClusters;
    }

    /**
     * @param ArrayOfRoomTypeCluster $RoomTypeClusters
     * @return \Gueststream\PMS\IQWare\API\RoomTypeClusterResult
     */
    public function setRoomTypeClusters($RoomTypeClusters)
    {
        $this->RoomTypeClusters = $RoomTypeClusters;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getUnAssociatedRoomTypeIds()
    {
        return $this->UnAssociatedRoomTypeIds;
    }

    /**
     * @param ArrayOfInt $UnAssociatedRoomTypeIds
     * @return \Gueststream\PMS\IQWare\API\RoomTypeClusterResult
     */
    public function setUnAssociatedRoomTypeIds($UnAssociatedRoomTypeIds)
    {
        $this->UnAssociatedRoomTypeIds = $UnAssociatedRoomTypeIds;
        return $this;
    }
}

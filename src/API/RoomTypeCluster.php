<?php

namespace Gueststream\PMS\IQWare\API;

class RoomTypeCluster
{

    /**
     * @var int $ID_RoomTypeCluster
     */
    protected $ID_RoomTypeCluster = null;

    /**
     * @var string $ClusterName
     */
    protected $ClusterName = null;

    /**
     * @var ArrayOfInt $RoomTypes
     */
    protected $RoomTypes = null;

    /**
     * @param int $ID_RoomTypeCluster
     */
    public function __construct($ID_RoomTypeCluster)
    {
        $this->ID_RoomTypeCluster = $ID_RoomTypeCluster;
    }

    /**
     * @return int
     */
    public function getID_RoomTypeCluster()
    {
        return $this->ID_RoomTypeCluster;
    }

    /**
     * @param int $ID_RoomTypeCluster
     * @return \Gueststream\PMS\IQWare\API\RoomTypeCluster
     */
    public function setID_RoomTypeCluster($ID_RoomTypeCluster)
    {
        $this->ID_RoomTypeCluster = $ID_RoomTypeCluster;
        return $this;
    }

    /**
     * @return string
     */
    public function getClusterName()
    {
        return $this->ClusterName;
    }

    /**
     * @param string $ClusterName
     * @return \Gueststream\PMS\IQWare\API\RoomTypeCluster
     */
    public function setClusterName($ClusterName)
    {
        $this->ClusterName = $ClusterName;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getRoomTypes()
    {
        return $this->RoomTypes;
    }

    /**
     * @param ArrayOfInt $RoomTypes
     * @return \Gueststream\PMS\IQWare\API\RoomTypeCluster
     */
    public function setRoomTypes($RoomTypes)
    {
        $this->RoomTypes = $RoomTypes;
        return $this;
    }
}

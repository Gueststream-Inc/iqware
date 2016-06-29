<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomTypeClustersResponse
{

    /**
     * @var ArrayOfRoomTypeClusterResult $getAllRoomTypeClustersResult
     */
    protected $getAllRoomTypeClustersResult = null;

    /**
     * @param ArrayOfRoomTypeClusterResult $getAllRoomTypeClustersResult
     */
    public function __construct($getAllRoomTypeClustersResult)
    {
        $this->getAllRoomTypeClustersResult = $getAllRoomTypeClustersResult;
    }

    /**
     * @return ArrayOfRoomTypeClusterResult
     */
    public function getGetAllRoomTypeClustersResult()
    {
        return $this->getAllRoomTypeClustersResult;
    }

    /**
     * @param ArrayOfRoomTypeClusterResult $getAllRoomTypeClustersResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomTypeClustersResponse
     */
    public function setGetAllRoomTypeClustersResult($getAllRoomTypeClustersResult)
    {
        $this->getAllRoomTypeClustersResult = $getAllRoomTypeClustersResult;
        return $this;
    }
}

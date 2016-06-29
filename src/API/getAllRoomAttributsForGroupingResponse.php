<?php

namespace Gueststream\PMS\IQWare\API;

class getAllRoomAttributsForGroupingResponse
{

    /**
     * @var ArrayOfRoomAttributGrouping $getAllRoomAttributsForGroupingResult
     */
    protected $getAllRoomAttributsForGroupingResult = null;

    /**
     * @param ArrayOfRoomAttributGrouping $getAllRoomAttributsForGroupingResult
     */
    public function __construct($getAllRoomAttributsForGroupingResult)
    {
        $this->getAllRoomAttributsForGroupingResult = $getAllRoomAttributsForGroupingResult;
    }

    /**
     * @return ArrayOfRoomAttributGrouping
     */
    public function getGetAllRoomAttributsForGroupingResult()
    {
        return $this->getAllRoomAttributsForGroupingResult;
    }

    /**
     * @param ArrayOfRoomAttributGrouping $getAllRoomAttributsForGroupingResult
     * @return \Gueststream\PMS\IQWare\API\getAllRoomAttributsForGroupingResponse
     */
    public function setGetAllRoomAttributsForGroupingResult($getAllRoomAttributsForGroupingResult)
    {
        $this->getAllRoomAttributsForGroupingResult = $getAllRoomAttributsForGroupingResult;
        return $this;
    }
}

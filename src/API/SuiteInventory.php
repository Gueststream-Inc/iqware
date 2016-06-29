<?php

namespace Gueststream\PMS\IQWare\API;

class SuiteInventory
{

    /**
     * @var ArrayOfRoomAvailabilityForStay $SuiteUnits
     */
    protected $SuiteUnits = null;

    /**
     * @var ArrayOfRoomInventory $RoomList
     */
    protected $RoomList = null;

    /**
     * @var int $SuiteId
     */
    protected $SuiteId = null;

    /**
     * @var int $BeddingId
     */
    protected $BeddingId = null;

    /**
     * @var int $RoomTypeId
     */
    protected $RoomTypeId = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @var int $MainRoomId
     */
    protected $MainRoomId = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @param int $SuiteId
     * @param int $BeddingId
     * @param int $RoomTypeId
     * @param string $RoomNo
     * @param int $MainRoomId
     * @param int $Priority
     */
    public function __construct($SuiteId, $BeddingId, $RoomTypeId, $RoomNo, $MainRoomId, $Priority)
    {
        $this->SuiteId = $SuiteId;
        $this->BeddingId = $BeddingId;
        $this->RoomTypeId = $RoomTypeId;
        $this->RoomNo = $RoomNo;
        $this->MainRoomId = $MainRoomId;
        $this->Priority = $Priority;
    }

    /**
     * @return ArrayOfRoomAvailabilityForStay
     */
    public function getSuiteUnits()
    {
        return $this->SuiteUnits;
    }

    /**
     * @param ArrayOfRoomAvailabilityForStay $SuiteUnits
     * @return \Gueststream\PMS\IQWare\API\SuiteInventory
     */
    public function setSuiteUnits($SuiteUnits)
    {
        $this->SuiteUnits = $SuiteUnits;
        return $this;
    }

    /**
     * @return ArrayOfRoomInventory
     */
    public function getRoomList()
    {
        return $this->RoomList;
    }

    /**
     * @param ArrayOfRoomInventory $RoomList
     * @return \Gueststream\PMS\IQWare\API\SuiteInventory
     */
    public function setRoomList($RoomList)
    {
        $this->RoomList = $RoomList;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuiteId()
    {
        return $this->SuiteId;
    }

    /**
     * @param int $SuiteId
     * @return \Gueststream\PMS\IQWare\API\SuiteInventory
     */
    public function setSuiteId($SuiteId)
    {
        $this->SuiteId = $SuiteId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBeddingId()
    {
        return $this->BeddingId;
    }

    /**
     * @param int $BeddingId
     * @return \Gueststream\PMS\IQWare\API\SuiteInventory
     */
    public function setBeddingId($BeddingId)
    {
        $this->BeddingId = $BeddingId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomTypeId()
    {
        return $this->RoomTypeId;
    }

    /**
     * @param int $RoomTypeId
     * @return \Gueststream\PMS\IQWare\API\SuiteInventory
     */
    public function setRoomTypeId($RoomTypeId)
    {
        $this->RoomTypeId = $RoomTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomNo()
    {
        return $this->RoomNo;
    }

    /**
     * @param string $RoomNo
     * @return \Gueststream\PMS\IQWare\API\SuiteInventory
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getMainRoomId()
    {
        return $this->MainRoomId;
    }

    /**
     * @param int $MainRoomId
     * @return \Gueststream\PMS\IQWare\API\SuiteInventory
     */
    public function setMainRoomId($MainRoomId)
    {
        $this->MainRoomId = $MainRoomId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return \Gueststream\PMS\IQWare\API\SuiteInventory
     */
    public function setPriority($Priority)
    {
        $this->Priority = $Priority;
        return $this;
    }
}

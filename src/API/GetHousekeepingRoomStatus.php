<?php

namespace Gueststream\PMS\IQWare\API;

class GetHousekeepingRoomStatus
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $ID_Room
     */
    protected $ID_Room = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @param int $guid
     * @param int $ID_Room
     * @param int $AccountNo
     */
    public function __construct($guid, $ID_Room, $AccountNo)
    {
        $this->guid = $guid;
        $this->ID_Room = $ID_Room;
        $this->AccountNo = $AccountNo;
    }

    /**
     * @return int
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param int $guid
     * @return \Gueststream\PMS\IQWare\API\GetHousekeepingRoomStatus
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Room()
    {
        return $this->ID_Room;
    }

    /**
     * @param int $ID_Room
     * @return \Gueststream\PMS\IQWare\API\GetHousekeepingRoomStatus
     */
    public function setID_Room($ID_Room)
    {
        $this->ID_Room = $ID_Room;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }

    /**
     * @param int $AccountNo
     * @return \Gueststream\PMS\IQWare\API\GetHousekeepingRoomStatus
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }
}

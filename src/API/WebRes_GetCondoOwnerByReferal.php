<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_GetCondoOwnerByReferal
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var string $RoomNo
     */
    protected $RoomNo = null;

    /**
     * @param int $guid
     * @param int $AccountNo
     * @param string $RoomNo
     */
    public function __construct($guid, $AccountNo, $RoomNo)
    {
        $this->guid = $guid;
        $this->AccountNo = $AccountNo;
        $this->RoomNo = $RoomNo;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerByReferal
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerByReferal
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_GetCondoOwnerByReferal
     */
    public function setRoomNo($RoomNo)
    {
        $this->RoomNo = $RoomNo;
        return $this;
    }
}

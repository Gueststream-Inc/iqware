<?php

namespace Gueststream\PMS\IQWare\API;

class WebRes_LoadReservation
{

    /**
     * @var int $guid
     */
    protected $guid = null;

    /**
     * @var int $accountNo
     */
    protected $accountNo = null;

    /**
     * @param int $guid
     * @param int $accountNo
     */
    public function __construct($guid, $accountNo)
    {
        $this->guid = $guid;
        $this->accountNo = $accountNo;
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
     * @return \Gueststream\PMS\IQWare\API\WebRes_LoadReservation
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
        return $this->accountNo;
    }

    /**
     * @param int $accountNo
     * @return \Gueststream\PMS\IQWare\API\WebRes_LoadReservation
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }
}

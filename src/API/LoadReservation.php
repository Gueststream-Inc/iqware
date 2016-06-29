<?php

namespace Gueststream\PMS\IQWare\API;

class LoadReservation
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
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var boolean $IsCaseSensitive
     */
    protected $IsCaseSensitive = null;

    /**
     * @param int $guid
     * @param int $accountNo
     * @param string $lastName
     * @param boolean $IsCaseSensitive
     */
    public function __construct($guid, $accountNo, $lastName, $IsCaseSensitive)
    {
        $this->guid = $guid;
        $this->accountNo = $accountNo;
        $this->lastName = $lastName;
        $this->IsCaseSensitive = $IsCaseSensitive;
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
     * @return \Gueststream\PMS\IQWare\API\LoadReservation
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
     * @return \Gueststream\PMS\IQWare\API\LoadReservation
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \Gueststream\PMS\IQWare\API\LoadReservation
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCaseSensitive()
    {
        return $this->IsCaseSensitive;
    }

    /**
     * @param boolean $IsCaseSensitive
     * @return \Gueststream\PMS\IQWare\API\LoadReservation
     */
    public function setIsCaseSensitive($IsCaseSensitive)
    {
        $this->IsCaseSensitive = $IsCaseSensitive;
        return $this;
    }
}

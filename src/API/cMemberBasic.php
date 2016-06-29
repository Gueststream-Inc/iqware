<?php

namespace Gueststream\PMS\IQWare\API;

class cMemberBasic
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var cAddresses $Addresses
     */
    protected $Addresses = null;

    /**
     * @param int $AccountNo
     */
    public function __construct($AccountNo)
    {
        $this->AccountNo = $AccountNo;
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
     * @return \Gueststream\PMS\IQWare\API\cMemberBasic
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return cAddresses
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param cAddresses $Addresses
     * @return \Gueststream\PMS\IQWare\API\cMemberBasic
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
        return $this;
    }
}

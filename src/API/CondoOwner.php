<?php

namespace Gueststream\PMS\IQWare\API;

class CondoOwner
{

    /**
     * @var int $AccountNo
     */
    protected $AccountNo = null;

    /**
     * @var int $ID_Member
     */
    protected $ID_Member = null;

    /**
     * @var int $ID_Address
     */
    protected $ID_Address = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @param int $AccountNo
     * @param int $ID_Member
     * @param int $ID_Address
     * @param string $AccountName
     */
    public function __construct($AccountNo, $ID_Member, $ID_Address, $AccountName)
    {
        $this->AccountNo = $AccountNo;
        $this->ID_Member = $ID_Member;
        $this->ID_Address = $ID_Address;
        $this->AccountName = $AccountName;
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
     * @return \Gueststream\PMS\IQWare\API\CondoOwner
     */
    public function setAccountNo($AccountNo)
    {
        $this->AccountNo = $AccountNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Member()
    {
        return $this->ID_Member;
    }

    /**
     * @param int $ID_Member
     * @return \Gueststream\PMS\IQWare\API\CondoOwner
     */
    public function setID_Member($ID_Member)
    {
        $this->ID_Member = $ID_Member;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Address()
    {
        return $this->ID_Address;
    }

    /**
     * @param int $ID_Address
     * @return \Gueststream\PMS\IQWare\API\CondoOwner
     */
    public function setID_Address($ID_Address)
    {
        $this->ID_Address = $ID_Address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \Gueststream\PMS\IQWare\API\CondoOwner
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }
}

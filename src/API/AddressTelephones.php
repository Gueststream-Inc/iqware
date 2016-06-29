<?php

namespace Gueststream\PMS\IQWare\API;

class AddressTelephones
{

    /**
     * @var int $AddressID
     */
    protected $AddressID = null;

    /**
     * @var int $PhoneID
     */
    protected $PhoneID = null;

    /**
     * @var int $PhoneType
     */
    protected $PhoneType = null;

    /**
     * @var string $PhoneNo
     */
    protected $PhoneNo = null;

    /**
     * @var int $Address_Id
     */
    protected $Address_Id = null;

    /**
     * @param int $AddressID
     * @param int $PhoneID
     * @param int $PhoneType
     * @param string $PhoneNo
     * @param int $Address_Id
     */
    public function __construct($AddressID, $PhoneID, $PhoneType, $PhoneNo, $Address_Id)
    {
        $this->AddressID = $AddressID;
        $this->PhoneID = $PhoneID;
        $this->PhoneType = $PhoneType;
        $this->PhoneNo = $PhoneNo;
        $this->Address_Id = $Address_Id;
    }

    /**
     * @return int
     */
    public function getAddressID()
    {
        return $this->AddressID;
    }

    /**
     * @param int $AddressID
     * @return \Gueststream\PMS\IQWare\API\AddressTelephones
     */
    public function setAddressID($AddressID)
    {
        $this->AddressID = $AddressID;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneID()
    {
        return $this->PhoneID;
    }

    /**
     * @param int $PhoneID
     * @return \Gueststream\PMS\IQWare\API\AddressTelephones
     */
    public function setPhoneID($PhoneID)
    {
        $this->PhoneID = $PhoneID;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneType()
    {
        return $this->PhoneType;
    }

    /**
     * @param int $PhoneType
     * @return \Gueststream\PMS\IQWare\API\AddressTelephones
     */
    public function setPhoneType($PhoneType)
    {
        $this->PhoneType = $PhoneType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->PhoneNo;
    }

    /**
     * @param string $PhoneNo
     * @return \Gueststream\PMS\IQWare\API\AddressTelephones
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddress_Id()
    {
        return $this->Address_Id;
    }

    /**
     * @param int $Address_Id
     * @return \Gueststream\PMS\IQWare\API\AddressTelephones
     */
    public function setAddress_Id($Address_Id)
    {
        $this->Address_Id = $Address_Id;
        return $this;
    }
}

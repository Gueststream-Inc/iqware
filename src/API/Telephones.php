<?php

namespace Gueststream\PMS\IQWare\API;

class Telephones
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
     * @param int $AddressID
     * @param int $PhoneID
     * @param int $PhoneType
     * @param string $PhoneNo
     */
    public function __construct($AddressID, $PhoneID, $PhoneType, $PhoneNo)
    {
        $this->AddressID = $AddressID;
        $this->PhoneID = $PhoneID;
        $this->PhoneType = $PhoneType;
        $this->PhoneNo = $PhoneNo;
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
     * @return \Gueststream\PMS\IQWare\API\Telephones
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
     * @return \Gueststream\PMS\IQWare\API\Telephones
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
     * @return \Gueststream\PMS\IQWare\API\Telephones
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
     * @return \Gueststream\PMS\IQWare\API\Telephones
     */
    public function setPhoneNo($PhoneNo)
    {
        $this->PhoneNo = $PhoneNo;
        return $this;
    }
}

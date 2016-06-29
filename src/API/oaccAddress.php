<?php

namespace Gueststream\PMS\IQWare\API;

class oaccAddress
{

    /**
     * @var int $ID_Address
     */
    protected $ID_Address = null;

    /**
     * @var TAddressType $addressType
     */
    protected $addressType = null;

    /**
     * @var int $Dear
     */
    protected $Dear = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $OtherCieName
     */
    protected $OtherCieName = null;

    /**
     * @var ArrayOfOaccTelephone $ListPhone
     */
    protected $ListPhone = null;

    /**
     * @param int $ID_Address
     * @param TAddressType $addressType
     * @param int $Dear
     */
    public function __construct($ID_Address, $addressType, $Dear)
    {
        $this->ID_Address = $ID_Address;
        $this->addressType = $addressType;
        $this->Dear = $Dear;
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
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setID_Address($ID_Address)
    {
        $this->ID_Address = $ID_Address;
        return $this;
    }

    /**
     * @return TAddressType
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * @param TAddressType $addressType
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDear()
    {
        return $this->Dear;
    }

    /**
     * @param int $Dear
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setDear($Dear)
    {
        $this->Dear = $Dear;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherCieName()
    {
        return $this->OtherCieName;
    }

    /**
     * @param string $OtherCieName
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setOtherCieName($OtherCieName)
    {
        $this->OtherCieName = $OtherCieName;
        return $this;
    }

    /**
     * @return ArrayOfOaccTelephone
     */
    public function getListPhone()
    {
        return $this->ListPhone;
    }

    /**
     * @param ArrayOfOaccTelephone $ListPhone
     * @return \Gueststream\PMS\IQWare\API\oaccAddress
     */
    public function setListPhone($ListPhone)
    {
        $this->ListPhone = $ListPhone;
        return $this;
    }
}

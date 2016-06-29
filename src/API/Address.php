<?php

namespace Gueststream\PMS\IQWare\API;

class Address
{

    /**
     * @var int $AddressID
     */
    protected $AddressID = null;

    /**
     * @var int $Dear
     */
    protected $Dear = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $WebSiteURL
     */
    protected $WebSiteURL = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var boolean $IsMailing
     */
    protected $IsMailing = null;

    /**
     * @var string $OtherCieName
     */
    protected $OtherCieName = null;

    /**
     * @var int $ConfirmBy
     */
    protected $ConfirmBy = null;

    /**
     * @param int $AddressID
     * @param int $Dear
     * @param string $Address1
     * @param string $LastName
     * @param string $FirstName
     * @param string $City
     * @param string $State
     * @param string $Title
     * @param string $Country
     * @param string $ZipCode
     * @param string $Address2
     * @param string $WebSiteURL
     * @param string $Email
     * @param boolean $IsMailing
     * @param string $OtherCieName
     * @param int $ConfirmBy
     */
    public function __construct($AddressID, $Dear, $Address1, $LastName, $FirstName, $City, $State, $Title, $Country, $ZipCode, $Address2, $WebSiteURL, $Email, $IsMailing, $OtherCieName, $ConfirmBy)
    {
        $this->AddressID = $AddressID;
        $this->Dear = $Dear;
        $this->Address1 = $Address1;
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->City = $City;
        $this->State = $State;
        $this->Title = $Title;
        $this->Country = $Country;
        $this->ZipCode = $ZipCode;
        $this->Address2 = $Address2;
        $this->WebSiteURL = $WebSiteURL;
        $this->Email = $Email;
        $this->IsMailing = $IsMailing;
        $this->OtherCieName = $OtherCieName;
        $this->ConfirmBy = $ConfirmBy;
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setAddressID($AddressID)
    {
        $this->AddressID = $AddressID;
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
     * @return \Gueststream\PMS\IQWare\API\Address
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
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
     * @return \Gueststream\PMS\IQWare\API\Address
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setState($State)
    {
        $this->State = $State;
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
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
     * @return \Gueststream\PMS\IQWare\API\Address
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebSiteURL()
    {
        return $this->WebSiteURL;
    }

    /**
     * @param string $WebSiteURL
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setWebSiteURL($WebSiteURL)
    {
        $this->WebSiteURL = $WebSiteURL;
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMailing()
    {
        return $this->IsMailing;
    }

    /**
     * @param boolean $IsMailing
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setIsMailing($IsMailing)
    {
        $this->IsMailing = $IsMailing;
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
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setOtherCieName($OtherCieName)
    {
        $this->OtherCieName = $OtherCieName;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfirmBy()
    {
        return $this->ConfirmBy;
    }

    /**
     * @param int $ConfirmBy
     * @return \Gueststream\PMS\IQWare\API\Address
     */
    public function setConfirmBy($ConfirmBy)
    {
        $this->ConfirmBy = $ConfirmBy;
        return $this;
    }
}

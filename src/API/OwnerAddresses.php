<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerAddresses
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
     * @var AddressTelephones $AddressTelephones
     */
    protected $AddressTelephones = null;

    /**
     * @var int $ID_CondoOwner
     */
    protected $ID_CondoOwner = null;

    /**
     * @param int $AddressID
     * @param int $Dear
     * @param string $Address1
     * @param string $Address2
     * @param string $FirstName
     * @param string $LastName
     * @param string $Title
     * @param string $City
     * @param string $State
     * @param string $Country
     * @param string $ZipCode
     * @param string $WebSiteURL
     * @param string $Email
     * @param boolean $IsMailing
     * @param string $OtherCieName
     * @param int $ConfirmBy
     * @param AddressTelephones $AddressTelephones
     * @param int $ID_CondoOwner
     */
    public function __construct($AddressID, $Dear, $Address1, $Address2, $FirstName, $LastName, $Title, $City, $State, $Country, $ZipCode, $WebSiteURL, $Email, $IsMailing, $OtherCieName, $ConfirmBy, $AddressTelephones, $ID_CondoOwner)
    {
        $this->AddressID = $AddressID;
        $this->Dear = $Dear;
        $this->Address1 = $Address1;
        $this->Address2 = $Address2;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Title = $Title;
        $this->City = $City;
        $this->State = $State;
        $this->Country = $Country;
        $this->ZipCode = $ZipCode;
        $this->WebSiteURL = $WebSiteURL;
        $this->Email = $Email;
        $this->IsMailing = $IsMailing;
        $this->OtherCieName = $OtherCieName;
        $this->ConfirmBy = $ConfirmBy;
        $this->AddressTelephones = $AddressTelephones;
        $this->ID_CondoOwner = $ID_CondoOwner;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
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
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
     */
    public function setConfirmBy($ConfirmBy)
    {
        $this->ConfirmBy = $ConfirmBy;
        return $this;
    }

    /**
     * @return AddressTelephones
     */
    public function getAddressTelephones()
    {
        return $this->AddressTelephones;
    }

    /**
     * @param AddressTelephones $AddressTelephones
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
     */
    public function setAddressTelephones($AddressTelephones)
    {
        $this->AddressTelephones = $AddressTelephones;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CondoOwner()
    {
        return $this->ID_CondoOwner;
    }

    /**
     * @param int $ID_CondoOwner
     * @return \Gueststream\PMS\IQWare\API\OwnerAddresses
     */
    public function setID_CondoOwner($ID_CondoOwner)
    {
        $this->ID_CondoOwner = $ID_CondoOwner;
        return $this;
    }
}

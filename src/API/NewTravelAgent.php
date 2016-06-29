<?php

namespace Gueststream\PMS\IQWare\API;

class NewTravelAgent
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $IATANo
     */
    protected $IATANo = null;

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
     * @var string $HomePhone
     */
    protected $HomePhone = null;

    /**
     * @var string $WorkPhone
     */
    protected $WorkPhone = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param string $IATANo
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
     * @param string $HomePhone
     * @param string $WorkPhone
     * @param string $Fax
     */
    public function __construct($UserName, $Password, $IATANo, $Dear, $Address1, $LastName, $FirstName, $City, $State, $Title, $Country, $ZipCode, $Address2, $WebSiteURL, $Email, $IsMailing, $OtherCieName, $ConfirmBy, $HomePhone, $WorkPhone, $Fax)
    {
        $this->UserName = $UserName;
        $this->Password = $Password;
        $this->IATANo = $IATANo;
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
        $this->HomePhone = $HomePhone;
        $this->WorkPhone = $WorkPhone;
        $this->Fax = $Fax;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return string
     */
    public function getIATANo()
    {
        return $this->IATANo;
    }

    /**
     * @param string $IATANo
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
     */
    public function setIATANo($IATANo)
    {
        $this->IATANo = $IATANo;
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
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
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
     */
    public function setConfirmBy($ConfirmBy)
    {
        $this->ConfirmBy = $ConfirmBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
        return $this->HomePhone;
    }

    /**
     * @param string $HomePhone
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
     */
    public function setHomePhone($HomePhone)
    {
        $this->HomePhone = $HomePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkPhone()
    {
        return $this->WorkPhone;
    }

    /**
     * @param string $WorkPhone
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
     */
    public function setWorkPhone($WorkPhone)
    {
        $this->WorkPhone = $WorkPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \Gueststream\PMS\IQWare\API\NewTravelAgent
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;
        return $this;
    }
}

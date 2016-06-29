<?php

namespace Gueststream\PMS\IQWare\API;

class cAddress extends cAddressBase
{

    /**
     * @var TContactAndBillingType $AddressType
     */
    protected $AddressType = null;

    /**
     * @var TDearType $DearType
     */
    protected $DearType = null;

    /**
     * @var int $LanguageID
     */
    protected $LanguageID = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $PasswordString
     */
    protected $PasswordString = null;

    /**
     * @var string $WebLogin
     */
    protected $WebLogin = null;

    /**
     * @var string $JobTile
     */
    protected $JobTile = null;

    /**
     * @var string $OtherCieName
     */
    protected $OtherCieName = null;

    /**
     * @var TConfirmationType $ConfirmBy
     */
    protected $ConfirmBy = null;

    /**
     * @var boolean $SendPromoMail
     */
    protected $SendPromoMail = null;

    /**
     * @var string $PhoneHome
     */
    protected $PhoneHome = null;

    /**
     * @var string $PhoneWork
     */
    protected $PhoneWork = null;

    /**
     * @var string $PhoneFax
     */
    protected $PhoneFax = null;

    /**
     * @var ArrayOfCTelephone $Telephone
     */
    protected $Telephone = null;

    /**
     * @param TContactAndBillingType $AddressType
     * @param TDearType $DearType
     * @param int $LanguageID
     * @param TConfirmationType $ConfirmBy
     * @param boolean $SendPromoMail
     */
    public function __construct($AddressType, $DearType, $LanguageID, $ConfirmBy, $SendPromoMail)
    {
        parent::__construct();
        $this->AddressType = $AddressType;
        $this->DearType = $DearType;
        $this->LanguageID = $LanguageID;
        $this->ConfirmBy = $ConfirmBy;
        $this->SendPromoMail = $SendPromoMail;
    }

    /**
     * @return TContactAndBillingType
     */
    public function getAddressType()
    {
        return $this->AddressType;
    }

    /**
     * @param TContactAndBillingType $AddressType
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setAddressType($AddressType)
    {
        $this->AddressType = $AddressType;
        return $this;
    }

    /**
     * @return TDearType
     */
    public function getDearType()
    {
        return $this->DearType;
    }

    /**
     * @param TDearType $DearType
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setDearType($DearType)
    {
        $this->DearType = $DearType;
        return $this;
    }

    /**
     * @return int
     */
    public function getLanguageID()
    {
        return $this->LanguageID;
    }

    /**
     * @param int $LanguageID
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setLanguageID($LanguageID)
    {
        $this->LanguageID = $LanguageID;
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
     * @return \Gueststream\PMS\IQWare\API\cAddress
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
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordString()
    {
        return $this->PasswordString;
    }

    /**
     * @param string $PasswordString
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setPasswordString($PasswordString)
    {
        $this->PasswordString = $PasswordString;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebLogin()
    {
        return $this->WebLogin;
    }

    /**
     * @param string $WebLogin
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setWebLogin($WebLogin)
    {
        $this->WebLogin = $WebLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobTile()
    {
        return $this->JobTile;
    }

    /**
     * @param string $JobTile
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setJobTile($JobTile)
    {
        $this->JobTile = $JobTile;
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
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setOtherCieName($OtherCieName)
    {
        $this->OtherCieName = $OtherCieName;
        return $this;
    }

    /**
     * @return TConfirmationType
     */
    public function getConfirmBy()
    {
        return $this->ConfirmBy;
    }

    /**
     * @param TConfirmationType $ConfirmBy
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setConfirmBy($ConfirmBy)
    {
        $this->ConfirmBy = $ConfirmBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSendPromoMail()
    {
        return $this->SendPromoMail;
    }

    /**
     * @param boolean $SendPromoMail
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setSendPromoMail($SendPromoMail)
    {
        $this->SendPromoMail = $SendPromoMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneHome()
    {
        return $this->PhoneHome;
    }

    /**
     * @param string $PhoneHome
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setPhoneHome($PhoneHome)
    {
        $this->PhoneHome = $PhoneHome;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneWork()
    {
        return $this->PhoneWork;
    }

    /**
     * @param string $PhoneWork
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setPhoneWork($PhoneWork)
    {
        $this->PhoneWork = $PhoneWork;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneFax()
    {
        return $this->PhoneFax;
    }

    /**
     * @param string $PhoneFax
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setPhoneFax($PhoneFax)
    {
        $this->PhoneFax = $PhoneFax;
        return $this;
    }

    /**
     * @return ArrayOfCTelephone
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param ArrayOfCTelephone $Telephone
     * @return \Gueststream\PMS\IQWare\API\cAddress
     */
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;
        return $this;
    }
}

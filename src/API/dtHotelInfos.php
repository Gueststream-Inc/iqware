<?php

namespace Gueststream\PMS\IQWare\API;

class dtHotelInfos
{

    /**
     * @var int $ID_Property
     */
    protected $ID_Property = null;

    /**
     * @var int $ID_Currency
     */
    protected $ID_Currency = null;

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $CurrencySymbol
     */
    protected $CurrencySymbol = null;

    /**
     * @var \DateTime $CurrentHotelDate
     */
    protected $CurrentHotelDate = null;

    /**
     * @var string $Phone800
     */
    protected $Phone800 = null;

    /**
     * @var int $ID_Language
     */
    protected $ID_Language = null;

    /**
     * @var boolean $IsFranchise
     */
    protected $IsFranchise = null;

    /**
     * @var boolean $IsAr
     */
    protected $IsAr = null;

    /**
     * @param int $ID_Property
     * @param int $ID_Currency
     * @param string $HotelName
     * @param string $Address
     * @param string $State
     * @param string $Country
     * @param string $City
     * @param string $Phone
     * @param string $Email
     * @param string $CurrencySymbol
     * @param \DateTime $CurrentHotelDate
     * @param string $Phone800
     * @param int $ID_Language
     * @param boolean $IsFranchise
     * @param boolean $IsAr
     */
    public function __construct($ID_Property, $ID_Currency, $HotelName, $Address, $State, $Country, $City, $Phone, $Email, $CurrencySymbol, \DateTime $CurrentHotelDate, $Phone800, $ID_Language, $IsFranchise, $IsAr)
    {
        $this->ID_Property = $ID_Property;
        $this->ID_Currency = $ID_Currency;
        $this->HotelName = $HotelName;
        $this->Address = $Address;
        $this->State = $State;
        $this->Country = $Country;
        $this->City = $City;
        $this->Phone = $Phone;
        $this->Email = $Email;
        $this->CurrencySymbol = $CurrencySymbol;
        $this->CurrentHotelDate = $CurrentHotelDate->format(\DateTime::ATOM);
        $this->Phone800 = $Phone800;
        $this->ID_Language = $ID_Language;
        $this->IsFranchise = $IsFranchise;
        $this->IsAr = $IsAr;
    }

    /**
     * @return int
     */
    public function getID_Property()
    {
        return $this->ID_Property;
    }

    /**
     * @param int $ID_Property
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setID_Property($ID_Property)
    {
        $this->ID_Property = $ID_Property;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Currency()
    {
        return $this->ID_Currency;
    }

    /**
     * @param int $ID_Currency
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setID_Currency($ID_Currency)
    {
        $this->ID_Currency = $ID_Currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setHotelName($HotelName)
    {
        $this->HotelName = $HotelName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
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
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
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
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
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
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
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
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->CurrencySymbol;
    }

    /**
     * @param string $CurrencySymbol
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setCurrencySymbol($CurrencySymbol)
    {
        $this->CurrencySymbol = $CurrencySymbol;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCurrentHotelDate()
    {
        if ($this->CurrentHotelDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CurrentHotelDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CurrentHotelDate
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setCurrentHotelDate(\DateTime $CurrentHotelDate)
    {
        $this->CurrentHotelDate = $CurrentHotelDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone800()
    {
        return $this->Phone800;
    }

    /**
     * @param string $Phone800
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setPhone800($Phone800)
    {
        $this->Phone800 = $Phone800;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Language()
    {
        return $this->ID_Language;
    }

    /**
     * @param int $ID_Language
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setID_Language($ID_Language)
    {
        $this->ID_Language = $ID_Language;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFranchise()
    {
        return $this->IsFranchise;
    }

    /**
     * @param boolean $IsFranchise
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setIsFranchise($IsFranchise)
    {
        $this->IsFranchise = $IsFranchise;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAr()
    {
        return $this->IsAr;
    }

    /**
     * @param boolean $IsAr
     * @return \Gueststream\PMS\IQWare\API\dtHotelInfos
     */
    public function setIsAr($IsAr)
    {
        $this->IsAr = $IsAr;
        return $this;
    }
}

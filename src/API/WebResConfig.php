<?php

namespace Gueststream\PMS\IQWare\API;

class WebResConfig
{

    /**
     * @var \DateTime $LoadTime
     */
    protected $LoadTime = null;

    /**
     * @var \DateTime $CurrentHotelDate
     */
    protected $CurrentHotelDate = null;

    /**
     * @var string $PropertyName
     */
    protected $PropertyName = null;

    /**
     * @var string $CurrencySymbol
     */
    protected $CurrencySymbol = null;

    /**
     * @var int $CurrencyId
     */
    protected $CurrencyId = null;

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
     * @var string $Phone800
     */
    protected $Phone800 = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var int $IdWebRes
     */
    protected $IdWebRes = null;

    /**
     * @var int $IdProperty
     */
    protected $IdProperty = null;

    /**
     * @var int $IdUser
     */
    protected $IdUser = null;

    /**
     * @var string $DefaultLanguage
     */
    protected $DefaultLanguage = null;

    /**
     * @var int $MinDayFromHotelDate
     */
    protected $MinDayFromHotelDate = null;

    /**
     * @var int $MaxDayFromHotelDate
     */
    protected $MaxDayFromHotelDate = null;

    /**
     * @var \DateTime $MinDate
     */
    protected $MinDate = null;

    /**
     * @var \DateTime $MaxDate
     */
    protected $MaxDate = null;

    /**
     * @var int $MinGuestCount
     */
    protected $MinGuestCount = null;

    /**
     * @var int $MaxGuestCount
     */
    protected $MaxGuestCount = null;

    /**
     * @var int $MaxChildCount
     */
    protected $MaxChildCount = null;

    /**
     * @var boolean $AllowModification
     */
    protected $AllowModification = null;

    /**
     * @var boolean $AllowCancellation
     */
    protected $AllowCancellation = null;

    /**
     * @var boolean $AutoSendConfirm
     */
    protected $AutoSendConfirm = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var boolean $IsRoomTypeOverbook
     */
    protected $IsRoomTypeOverbook = null;

    /**
     * @var int $DefaultManualRateReason
     */
    protected $DefaultManualRateReason = null;

    /**
     * @var boolean $IsFirstLetterOfNameInUppercase
     */
    protected $IsFirstLetterOfNameInUppercase = null;

    /**
     * @var boolean $IsECheckActive
     */
    protected $IsECheckActive = null;

    /**
     * @var int $InventoryControl
     */
    protected $InventoryControl = null;

    /**
     * @var boolean $IsActivePaypal
     */
    protected $IsActivePaypal = null;

    /**
     * @var int $ID_TrnPaypal
     */
    protected $ID_TrnPaypal = null;

    /**
     * @var boolean $IsGlobalOverbook
     */
    protected $IsGlobalOverbook = null;

    /**
     * @var int $MinLenghtOfStay
     */
    protected $MinLenghtOfStay = null;

    /**
     * @var int $MaxLenghtOfStay
     */
    protected $MaxLenghtOfStay = null;

    /**
     * @var boolean $NamesInUppercase
     */
    protected $NamesInUppercase = null;

    /**
     * @var boolean $RoomFirst
     */
    protected $RoomFirst = null;

    /**
     * @var boolean $SendEmailConfirmation
     */
    protected $SendEmailConfirmation = null;

    /**
     * @var boolean $InstantEmailConfirmation
     */
    protected $InstantEmailConfirmation = null;

    /**
     * @var int $DefaultidSceBusiness
     */
    protected $DefaultidSceBusiness = null;

    /**
     * @var int $NextWebResNumber
     */
    protected $NextWebResNumber = null;

    /**
     * @var boolean $IsFirstNameRequired
     */
    protected $IsFirstNameRequired = null;

    /**
     * @var boolean $IsCompanyRequired
     */
    protected $IsCompanyRequired = null;

    /**
     * @var boolean $IsAdressRequired
     */
    protected $IsAdressRequired = null;

    /**
     * @var boolean $IsCityRequired
     */
    protected $IsCityRequired = null;

    /**
     * @var boolean $IsStateProvRequired
     */
    protected $IsStateProvRequired = null;

    /**
     * @var boolean $IsZipCodeRequired
     */
    protected $IsZipCodeRequired = null;

    /**
     * @var boolean $IsCountryRequired
     */
    protected $IsCountryRequired = null;

    /**
     * @var boolean $IsPhoneRequired
     */
    protected $IsPhoneRequired = null;

    /**
     * @var boolean $IsEmailRequired
     */
    protected $IsEmailRequired = null;

    /**
     * @var boolean $IsccRequired
     */
    protected $IsccRequired = null;

    /**
     * @var int $MaxChildAge
     */
    protected $MaxChildAge = null;

    /**
     * @var int $DefaultidGuestType
     */
    protected $DefaultidGuestType = null;

    /**
     * @var int $DefaultidGeographic
     */
    protected $DefaultidGeographic = null;

    /**
     * @var int $DefaultAdultQty
     */
    protected $DefaultAdultQty = null;

    /**
     * @var boolean $ShowRooms
     */
    protected $ShowRooms = null;

    /**
     * @var boolean $AcceptExpiredCCAtCheckOut
     */
    protected $AcceptExpiredCCAtCheckOut = null;

    /**
     * @var string $HotelImageUrl
     */
    protected $HotelImageUrl = null;

    /**
     * @var string $HotelDescription
     */
    protected $HotelDescription = null;

    /**
     * @var string $HotelPoliciesEnglish
     */
    protected $HotelPoliciesEnglish = null;

    /**
     * @var string $HotelPoliciesFrench
     */
    protected $HotelPoliciesFrench = null;

    /**
     * @var string $HotelPoliciesSpanish
     */
    protected $HotelPoliciesSpanish = null;

    /**
     * @var boolean $IsPromoEnable
     */
    protected $IsPromoEnable = null;

    /**
     * @var int $MultiHotelDefaultIDRoomType
     */
    protected $MultiHotelDefaultIDRoomType = null;

    /**
     * @var int $MultiHotelDefaultIDRateCode
     */
    protected $MultiHotelDefaultIDRateCode = null;

    /**
     * @var boolean $IsAdultsChildrenNotVisible
     */
    protected $IsAdultsChildrenNotVisible = null;

    /**
     * @var boolean $IsRoomNoHidden
     */
    protected $IsRoomNoHidden = null;

    /**
     * @var boolean $IsAscendingRank
     */
    protected $IsAscendingRank = null;

    /**
     * @var boolean $IsTravelInsEnable
     */
    protected $IsTravelInsEnable = null;

    /**
     * @var boolean $IsMailing
     */
    protected $IsMailing = null;

    /**
     * @var boolean $IsGroupShowMasterBalance
     */
    protected $IsGroupShowMasterBalance = null;

    /**
     * @var boolean $IsGroupAllowCancel
     */
    protected $IsGroupAllowCancel = null;

    /**
     * @var boolean $IsGroupAllowChangeLoginPassword
     */
    protected $IsGroupAllowChangeLoginPassword = null;

    /**
     * @var boolean $IsGrpIndBookingEnable
     */
    protected $IsGrpIndBookingEnable = null;

    /**
     * @var boolean $IsLimitativeInWEB
     */
    protected $IsLimitativeInWEB = null;

    /**
     * @param \DateTime $LoadTime
     * @param \DateTime $CurrentHotelDate
     * @param int $CurrencyId
     * @param int $IdWebRes
     * @param int $IdProperty
     * @param int $IdUser
     * @param int $MinDayFromHotelDate
     * @param int $MaxDayFromHotelDate
     * @param \DateTime $MinDate
     * @param \DateTime $MaxDate
     * @param int $MinGuestCount
     * @param int $MaxGuestCount
     * @param int $MaxChildCount
     * @param boolean $AllowModification
     * @param boolean $AllowCancellation
     * @param boolean $AutoSendConfirm
     * @param boolean $Active
     * @param boolean $IsRoomTypeOverbook
     * @param int $DefaultManualRateReason
     * @param boolean $IsFirstLetterOfNameInUppercase
     * @param boolean $IsECheckActive
     * @param int $InventoryControl
     * @param boolean $IsActivePaypal
     * @param int $ID_TrnPaypal
     * @param boolean $IsGlobalOverbook
     * @param int $MinLenghtOfStay
     * @param int $MaxLenghtOfStay
     * @param boolean $NamesInUppercase
     * @param boolean $RoomFirst
     * @param boolean $SendEmailConfirmation
     * @param boolean $InstantEmailConfirmation
     * @param int $DefaultidSceBusiness
     * @param int $NextWebResNumber
     * @param boolean $IsFirstNameRequired
     * @param boolean $IsCompanyRequired
     * @param boolean $IsAdressRequired
     * @param boolean $IsCityRequired
     * @param boolean $IsStateProvRequired
     * @param boolean $IsZipCodeRequired
     * @param boolean $IsCountryRequired
     * @param boolean $IsPhoneRequired
     * @param boolean $IsEmailRequired
     * @param boolean $IsccRequired
     * @param int $MaxChildAge
     * @param int $DefaultidGuestType
     * @param int $DefaultidGeographic
     * @param int $DefaultAdultQty
     * @param boolean $ShowRooms
     * @param boolean $AcceptExpiredCCAtCheckOut
     * @param boolean $IsPromoEnable
     * @param int $MultiHotelDefaultIDRoomType
     * @param int $MultiHotelDefaultIDRateCode
     * @param boolean $IsAdultsChildrenNotVisible
     * @param boolean $IsRoomNoHidden
     * @param boolean $IsAscendingRank
     * @param boolean $IsTravelInsEnable
     * @param boolean $IsMailing
     * @param boolean $IsGroupShowMasterBalance
     * @param boolean $IsGroupAllowCancel
     * @param boolean $IsGroupAllowChangeLoginPassword
     * @param boolean $IsGrpIndBookingEnable
     * @param boolean $IsLimitativeInWEB
     */
    public function __construct(\DateTime $LoadTime, \DateTime $CurrentHotelDate, $CurrencyId, $IdWebRes, $IdProperty, $IdUser, $MinDayFromHotelDate, $MaxDayFromHotelDate, \DateTime $MinDate, \DateTime $MaxDate, $MinGuestCount, $MaxGuestCount, $MaxChildCount, $AllowModification, $AllowCancellation, $AutoSendConfirm, $Active, $IsRoomTypeOverbook, $DefaultManualRateReason, $IsFirstLetterOfNameInUppercase, $IsECheckActive, $InventoryControl, $IsActivePaypal, $ID_TrnPaypal, $IsGlobalOverbook, $MinLenghtOfStay, $MaxLenghtOfStay, $NamesInUppercase, $RoomFirst, $SendEmailConfirmation, $InstantEmailConfirmation, $DefaultidSceBusiness, $NextWebResNumber, $IsFirstNameRequired, $IsCompanyRequired, $IsAdressRequired, $IsCityRequired, $IsStateProvRequired, $IsZipCodeRequired, $IsCountryRequired, $IsPhoneRequired, $IsEmailRequired, $IsccRequired, $MaxChildAge, $DefaultidGuestType, $DefaultidGeographic, $DefaultAdultQty, $ShowRooms, $AcceptExpiredCCAtCheckOut, $IsPromoEnable, $MultiHotelDefaultIDRoomType, $MultiHotelDefaultIDRateCode, $IsAdultsChildrenNotVisible, $IsRoomNoHidden, $IsAscendingRank, $IsTravelInsEnable, $IsMailing, $IsGroupShowMasterBalance, $IsGroupAllowCancel, $IsGroupAllowChangeLoginPassword, $IsGrpIndBookingEnable, $IsLimitativeInWEB)
    {
        $this->LoadTime = $LoadTime->format(\DateTime::ATOM);
        $this->CurrentHotelDate = $CurrentHotelDate->format(\DateTime::ATOM);
        $this->CurrencyId = $CurrencyId;
        $this->IdWebRes = $IdWebRes;
        $this->IdProperty = $IdProperty;
        $this->IdUser = $IdUser;
        $this->MinDayFromHotelDate = $MinDayFromHotelDate;
        $this->MaxDayFromHotelDate = $MaxDayFromHotelDate;
        $this->MinDate = $MinDate->format(\DateTime::ATOM);
        $this->MaxDate = $MaxDate->format(\DateTime::ATOM);
        $this->MinGuestCount = $MinGuestCount;
        $this->MaxGuestCount = $MaxGuestCount;
        $this->MaxChildCount = $MaxChildCount;
        $this->AllowModification = $AllowModification;
        $this->AllowCancellation = $AllowCancellation;
        $this->AutoSendConfirm = $AutoSendConfirm;
        $this->Active = $Active;
        $this->IsRoomTypeOverbook = $IsRoomTypeOverbook;
        $this->DefaultManualRateReason = $DefaultManualRateReason;
        $this->IsFirstLetterOfNameInUppercase = $IsFirstLetterOfNameInUppercase;
        $this->IsECheckActive = $IsECheckActive;
        $this->InventoryControl = $InventoryControl;
        $this->IsActivePaypal = $IsActivePaypal;
        $this->ID_TrnPaypal = $ID_TrnPaypal;
        $this->IsGlobalOverbook = $IsGlobalOverbook;
        $this->MinLenghtOfStay = $MinLenghtOfStay;
        $this->MaxLenghtOfStay = $MaxLenghtOfStay;
        $this->NamesInUppercase = $NamesInUppercase;
        $this->RoomFirst = $RoomFirst;
        $this->SendEmailConfirmation = $SendEmailConfirmation;
        $this->InstantEmailConfirmation = $InstantEmailConfirmation;
        $this->DefaultidSceBusiness = $DefaultidSceBusiness;
        $this->NextWebResNumber = $NextWebResNumber;
        $this->IsFirstNameRequired = $IsFirstNameRequired;
        $this->IsCompanyRequired = $IsCompanyRequired;
        $this->IsAdressRequired = $IsAdressRequired;
        $this->IsCityRequired = $IsCityRequired;
        $this->IsStateProvRequired = $IsStateProvRequired;
        $this->IsZipCodeRequired = $IsZipCodeRequired;
        $this->IsCountryRequired = $IsCountryRequired;
        $this->IsPhoneRequired = $IsPhoneRequired;
        $this->IsEmailRequired = $IsEmailRequired;
        $this->IsccRequired = $IsccRequired;
        $this->MaxChildAge = $MaxChildAge;
        $this->DefaultidGuestType = $DefaultidGuestType;
        $this->DefaultidGeographic = $DefaultidGeographic;
        $this->DefaultAdultQty = $DefaultAdultQty;
        $this->ShowRooms = $ShowRooms;
        $this->AcceptExpiredCCAtCheckOut = $AcceptExpiredCCAtCheckOut;
        $this->IsPromoEnable = $IsPromoEnable;
        $this->MultiHotelDefaultIDRoomType = $MultiHotelDefaultIDRoomType;
        $this->MultiHotelDefaultIDRateCode = $MultiHotelDefaultIDRateCode;
        $this->IsAdultsChildrenNotVisible = $IsAdultsChildrenNotVisible;
        $this->IsRoomNoHidden = $IsRoomNoHidden;
        $this->IsAscendingRank = $IsAscendingRank;
        $this->IsTravelInsEnable = $IsTravelInsEnable;
        $this->IsMailing = $IsMailing;
        $this->IsGroupShowMasterBalance = $IsGroupShowMasterBalance;
        $this->IsGroupAllowCancel = $IsGroupAllowCancel;
        $this->IsGroupAllowChangeLoginPassword = $IsGroupAllowChangeLoginPassword;
        $this->IsGrpIndBookingEnable = $IsGrpIndBookingEnable;
        $this->IsLimitativeInWEB = $IsLimitativeInWEB;
    }

    /**
     * @return \DateTime
     */
    public function getLoadTime()
    {
        if ($this->LoadTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LoadTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LoadTime
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setLoadTime(\DateTime $LoadTime)
    {
        $this->LoadTime = $LoadTime->format(\DateTime::ATOM);
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setCurrentHotelDate(\DateTime $CurrentHotelDate)
    {
        $this->CurrentHotelDate = $CurrentHotelDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return $this->PropertyName;
    }

    /**
     * @param string $PropertyName
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setPropertyName($PropertyName)
    {
        $this->PropertyName = $PropertyName;
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setCurrencySymbol($CurrencySymbol)
    {
        $this->CurrencySymbol = $CurrencySymbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->CurrencyId;
    }

    /**
     * @param int $CurrencyId
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setCurrencyId($CurrencyId)
    {
        $this->CurrencyId = $CurrencyId;
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setCity($City)
    {
        $this->City = $City;
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setPhone800($Phone800)
    {
        $this->Phone800 = $Phone800;
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdWebRes()
    {
        return $this->IdWebRes;
    }

    /**
     * @param int $IdWebRes
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIdWebRes($IdWebRes)
    {
        $this->IdWebRes = $IdWebRes;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdProperty()
    {
        return $this->IdProperty;
    }

    /**
     * @param int $IdProperty
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIdProperty($IdProperty)
    {
        $this->IdProperty = $IdProperty;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->IdUser;
    }

    /**
     * @param int $IdUser
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIdUser($IdUser)
    {
        $this->IdUser = $IdUser;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->DefaultLanguage;
    }

    /**
     * @param string $DefaultLanguage
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setDefaultLanguage($DefaultLanguage)
    {
        $this->DefaultLanguage = $DefaultLanguage;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinDayFromHotelDate()
    {
        return $this->MinDayFromHotelDate;
    }

    /**
     * @param int $MinDayFromHotelDate
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMinDayFromHotelDate($MinDayFromHotelDate)
    {
        $this->MinDayFromHotelDate = $MinDayFromHotelDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDayFromHotelDate()
    {
        return $this->MaxDayFromHotelDate;
    }

    /**
     * @param int $MaxDayFromHotelDate
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMaxDayFromHotelDate($MaxDayFromHotelDate)
    {
        $this->MaxDayFromHotelDate = $MaxDayFromHotelDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMinDate()
    {
        if ($this->MinDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->MinDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $MinDate
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMinDate(\DateTime $MinDate)
    {
        $this->MinDate = $MinDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMaxDate()
    {
        if ($this->MaxDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->MaxDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $MaxDate
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMaxDate(\DateTime $MaxDate)
    {
        $this->MaxDate = $MaxDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getMinGuestCount()
    {
        return $this->MinGuestCount;
    }

    /**
     * @param int $MinGuestCount
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMinGuestCount($MinGuestCount)
    {
        $this->MinGuestCount = $MinGuestCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxGuestCount()
    {
        return $this->MaxGuestCount;
    }

    /**
     * @param int $MaxGuestCount
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMaxGuestCount($MaxGuestCount)
    {
        $this->MaxGuestCount = $MaxGuestCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxChildCount()
    {
        return $this->MaxChildCount;
    }

    /**
     * @param int $MaxChildCount
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMaxChildCount($MaxChildCount)
    {
        $this->MaxChildCount = $MaxChildCount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowModification()
    {
        return $this->AllowModification;
    }

    /**
     * @param boolean $AllowModification
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setAllowModification($AllowModification)
    {
        $this->AllowModification = $AllowModification;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowCancellation()
    {
        return $this->AllowCancellation;
    }

    /**
     * @param boolean $AllowCancellation
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setAllowCancellation($AllowCancellation)
    {
        $this->AllowCancellation = $AllowCancellation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoSendConfirm()
    {
        return $this->AutoSendConfirm;
    }

    /**
     * @param boolean $AutoSendConfirm
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setAutoSendConfirm($AutoSendConfirm)
    {
        $this->AutoSendConfirm = $AutoSendConfirm;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setActive($Active)
    {
        $this->Active = $Active;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRoomTypeOverbook()
    {
        return $this->IsRoomTypeOverbook;
    }

    /**
     * @param boolean $IsRoomTypeOverbook
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsRoomTypeOverbook($IsRoomTypeOverbook)
    {
        $this->IsRoomTypeOverbook = $IsRoomTypeOverbook;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultManualRateReason()
    {
        return $this->DefaultManualRateReason;
    }

    /**
     * @param int $DefaultManualRateReason
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setDefaultManualRateReason($DefaultManualRateReason)
    {
        $this->DefaultManualRateReason = $DefaultManualRateReason;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFirstLetterOfNameInUppercase()
    {
        return $this->IsFirstLetterOfNameInUppercase;
    }

    /**
     * @param boolean $IsFirstLetterOfNameInUppercase
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsFirstLetterOfNameInUppercase($IsFirstLetterOfNameInUppercase)
    {
        $this->IsFirstLetterOfNameInUppercase = $IsFirstLetterOfNameInUppercase;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsECheckActive()
    {
        return $this->IsECheckActive;
    }

    /**
     * @param boolean $IsECheckActive
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsECheckActive($IsECheckActive)
    {
        $this->IsECheckActive = $IsECheckActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getInventoryControl()
    {
        return $this->InventoryControl;
    }

    /**
     * @param int $InventoryControl
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setInventoryControl($InventoryControl)
    {
        $this->InventoryControl = $InventoryControl;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActivePaypal()
    {
        return $this->IsActivePaypal;
    }

    /**
     * @param boolean $IsActivePaypal
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsActivePaypal($IsActivePaypal)
    {
        $this->IsActivePaypal = $IsActivePaypal;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TrnPaypal()
    {
        return $this->ID_TrnPaypal;
    }

    /**
     * @param int $ID_TrnPaypal
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setID_TrnPaypal($ID_TrnPaypal)
    {
        $this->ID_TrnPaypal = $ID_TrnPaypal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGlobalOverbook()
    {
        return $this->IsGlobalOverbook;
    }

    /**
     * @param boolean $IsGlobalOverbook
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsGlobalOverbook($IsGlobalOverbook)
    {
        $this->IsGlobalOverbook = $IsGlobalOverbook;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinLenghtOfStay()
    {
        return $this->MinLenghtOfStay;
    }

    /**
     * @param int $MinLenghtOfStay
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMinLenghtOfStay($MinLenghtOfStay)
    {
        $this->MinLenghtOfStay = $MinLenghtOfStay;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLenghtOfStay()
    {
        return $this->MaxLenghtOfStay;
    }

    /**
     * @param int $MaxLenghtOfStay
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMaxLenghtOfStay($MaxLenghtOfStay)
    {
        $this->MaxLenghtOfStay = $MaxLenghtOfStay;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNamesInUppercase()
    {
        return $this->NamesInUppercase;
    }

    /**
     * @param boolean $NamesInUppercase
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setNamesInUppercase($NamesInUppercase)
    {
        $this->NamesInUppercase = $NamesInUppercase;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRoomFirst()
    {
        return $this->RoomFirst;
    }

    /**
     * @param boolean $RoomFirst
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setRoomFirst($RoomFirst)
    {
        $this->RoomFirst = $RoomFirst;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSendEmailConfirmation()
    {
        return $this->SendEmailConfirmation;
    }

    /**
     * @param boolean $SendEmailConfirmation
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setSendEmailConfirmation($SendEmailConfirmation)
    {
        $this->SendEmailConfirmation = $SendEmailConfirmation;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInstantEmailConfirmation()
    {
        return $this->InstantEmailConfirmation;
    }

    /**
     * @param boolean $InstantEmailConfirmation
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setInstantEmailConfirmation($InstantEmailConfirmation)
    {
        $this->InstantEmailConfirmation = $InstantEmailConfirmation;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultidSceBusiness()
    {
        return $this->DefaultidSceBusiness;
    }

    /**
     * @param int $DefaultidSceBusiness
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setDefaultidSceBusiness($DefaultidSceBusiness)
    {
        $this->DefaultidSceBusiness = $DefaultidSceBusiness;
        return $this;
    }

    /**
     * @return int
     */
    public function getNextWebResNumber()
    {
        return $this->NextWebResNumber;
    }

    /**
     * @param int $NextWebResNumber
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setNextWebResNumber($NextWebResNumber)
    {
        $this->NextWebResNumber = $NextWebResNumber;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFirstNameRequired()
    {
        return $this->IsFirstNameRequired;
    }

    /**
     * @param boolean $IsFirstNameRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsFirstNameRequired($IsFirstNameRequired)
    {
        $this->IsFirstNameRequired = $IsFirstNameRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCompanyRequired()
    {
        return $this->IsCompanyRequired;
    }

    /**
     * @param boolean $IsCompanyRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsCompanyRequired($IsCompanyRequired)
    {
        $this->IsCompanyRequired = $IsCompanyRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdressRequired()
    {
        return $this->IsAdressRequired;
    }

    /**
     * @param boolean $IsAdressRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsAdressRequired($IsAdressRequired)
    {
        $this->IsAdressRequired = $IsAdressRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCityRequired()
    {
        return $this->IsCityRequired;
    }

    /**
     * @param boolean $IsCityRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsCityRequired($IsCityRequired)
    {
        $this->IsCityRequired = $IsCityRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStateProvRequired()
    {
        return $this->IsStateProvRequired;
    }

    /**
     * @param boolean $IsStateProvRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsStateProvRequired($IsStateProvRequired)
    {
        $this->IsStateProvRequired = $IsStateProvRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsZipCodeRequired()
    {
        return $this->IsZipCodeRequired;
    }

    /**
     * @param boolean $IsZipCodeRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsZipCodeRequired($IsZipCodeRequired)
    {
        $this->IsZipCodeRequired = $IsZipCodeRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCountryRequired()
    {
        return $this->IsCountryRequired;
    }

    /**
     * @param boolean $IsCountryRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsCountryRequired($IsCountryRequired)
    {
        $this->IsCountryRequired = $IsCountryRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPhoneRequired()
    {
        return $this->IsPhoneRequired;
    }

    /**
     * @param boolean $IsPhoneRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsPhoneRequired($IsPhoneRequired)
    {
        $this->IsPhoneRequired = $IsPhoneRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEmailRequired()
    {
        return $this->IsEmailRequired;
    }

    /**
     * @param boolean $IsEmailRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsEmailRequired($IsEmailRequired)
    {
        $this->IsEmailRequired = $IsEmailRequired;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsccRequired()
    {
        return $this->IsccRequired;
    }

    /**
     * @param boolean $IsccRequired
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsccRequired($IsccRequired)
    {
        $this->IsccRequired = $IsccRequired;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxChildAge()
    {
        return $this->MaxChildAge;
    }

    /**
     * @param int $MaxChildAge
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMaxChildAge($MaxChildAge)
    {
        $this->MaxChildAge = $MaxChildAge;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultidGuestType()
    {
        return $this->DefaultidGuestType;
    }

    /**
     * @param int $DefaultidGuestType
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setDefaultidGuestType($DefaultidGuestType)
    {
        $this->DefaultidGuestType = $DefaultidGuestType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultidGeographic()
    {
        return $this->DefaultidGeographic;
    }

    /**
     * @param int $DefaultidGeographic
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setDefaultidGeographic($DefaultidGeographic)
    {
        $this->DefaultidGeographic = $DefaultidGeographic;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultAdultQty()
    {
        return $this->DefaultAdultQty;
    }

    /**
     * @param int $DefaultAdultQty
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setDefaultAdultQty($DefaultAdultQty)
    {
        $this->DefaultAdultQty = $DefaultAdultQty;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getShowRooms()
    {
        return $this->ShowRooms;
    }

    /**
     * @param boolean $ShowRooms
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setShowRooms($ShowRooms)
    {
        $this->ShowRooms = $ShowRooms;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptExpiredCCAtCheckOut()
    {
        return $this->AcceptExpiredCCAtCheckOut;
    }

    /**
     * @param boolean $AcceptExpiredCCAtCheckOut
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setAcceptExpiredCCAtCheckOut($AcceptExpiredCCAtCheckOut)
    {
        $this->AcceptExpiredCCAtCheckOut = $AcceptExpiredCCAtCheckOut;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotelImageUrl()
    {
        return $this->HotelImageUrl;
    }

    /**
     * @param string $HotelImageUrl
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setHotelImageUrl($HotelImageUrl)
    {
        $this->HotelImageUrl = $HotelImageUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotelDescription()
    {
        return $this->HotelDescription;
    }

    /**
     * @param string $HotelDescription
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setHotelDescription($HotelDescription)
    {
        $this->HotelDescription = $HotelDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotelPoliciesEnglish()
    {
        return $this->HotelPoliciesEnglish;
    }

    /**
     * @param string $HotelPoliciesEnglish
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setHotelPoliciesEnglish($HotelPoliciesEnglish)
    {
        $this->HotelPoliciesEnglish = $HotelPoliciesEnglish;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotelPoliciesFrench()
    {
        return $this->HotelPoliciesFrench;
    }

    /**
     * @param string $HotelPoliciesFrench
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setHotelPoliciesFrench($HotelPoliciesFrench)
    {
        $this->HotelPoliciesFrench = $HotelPoliciesFrench;
        return $this;
    }

    /**
     * @return string
     */
    public function getHotelPoliciesSpanish()
    {
        return $this->HotelPoliciesSpanish;
    }

    /**
     * @param string $HotelPoliciesSpanish
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setHotelPoliciesSpanish($HotelPoliciesSpanish)
    {
        $this->HotelPoliciesSpanish = $HotelPoliciesSpanish;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPromoEnable()
    {
        return $this->IsPromoEnable;
    }

    /**
     * @param boolean $IsPromoEnable
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsPromoEnable($IsPromoEnable)
    {
        $this->IsPromoEnable = $IsPromoEnable;
        return $this;
    }

    /**
     * @return int
     */
    public function getMultiHotelDefaultIDRoomType()
    {
        return $this->MultiHotelDefaultIDRoomType;
    }

    /**
     * @param int $MultiHotelDefaultIDRoomType
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMultiHotelDefaultIDRoomType($MultiHotelDefaultIDRoomType)
    {
        $this->MultiHotelDefaultIDRoomType = $MultiHotelDefaultIDRoomType;
        return $this;
    }

    /**
     * @return int
     */
    public function getMultiHotelDefaultIDRateCode()
    {
        return $this->MultiHotelDefaultIDRateCode;
    }

    /**
     * @param int $MultiHotelDefaultIDRateCode
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setMultiHotelDefaultIDRateCode($MultiHotelDefaultIDRateCode)
    {
        $this->MultiHotelDefaultIDRateCode = $MultiHotelDefaultIDRateCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAdultsChildrenNotVisible()
    {
        return $this->IsAdultsChildrenNotVisible;
    }

    /**
     * @param boolean $IsAdultsChildrenNotVisible
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsAdultsChildrenNotVisible($IsAdultsChildrenNotVisible)
    {
        $this->IsAdultsChildrenNotVisible = $IsAdultsChildrenNotVisible;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRoomNoHidden()
    {
        return $this->IsRoomNoHidden;
    }

    /**
     * @param boolean $IsRoomNoHidden
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsRoomNoHidden($IsRoomNoHidden)
    {
        $this->IsRoomNoHidden = $IsRoomNoHidden;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAscendingRank()
    {
        return $this->IsAscendingRank;
    }

    /**
     * @param boolean $IsAscendingRank
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsAscendingRank($IsAscendingRank)
    {
        $this->IsAscendingRank = $IsAscendingRank;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTravelInsEnable()
    {
        return $this->IsTravelInsEnable;
    }

    /**
     * @param boolean $IsTravelInsEnable
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsTravelInsEnable($IsTravelInsEnable)
    {
        $this->IsTravelInsEnable = $IsTravelInsEnable;
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
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsMailing($IsMailing)
    {
        $this->IsMailing = $IsMailing;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGroupShowMasterBalance()
    {
        return $this->IsGroupShowMasterBalance;
    }

    /**
     * @param boolean $IsGroupShowMasterBalance
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsGroupShowMasterBalance($IsGroupShowMasterBalance)
    {
        $this->IsGroupShowMasterBalance = $IsGroupShowMasterBalance;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGroupAllowCancel()
    {
        return $this->IsGroupAllowCancel;
    }

    /**
     * @param boolean $IsGroupAllowCancel
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsGroupAllowCancel($IsGroupAllowCancel)
    {
        $this->IsGroupAllowCancel = $IsGroupAllowCancel;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGroupAllowChangeLoginPassword()
    {
        return $this->IsGroupAllowChangeLoginPassword;
    }

    /**
     * @param boolean $IsGroupAllowChangeLoginPassword
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsGroupAllowChangeLoginPassword($IsGroupAllowChangeLoginPassword)
    {
        $this->IsGroupAllowChangeLoginPassword = $IsGroupAllowChangeLoginPassword;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGrpIndBookingEnable()
    {
        return $this->IsGrpIndBookingEnable;
    }

    /**
     * @param boolean $IsGrpIndBookingEnable
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsGrpIndBookingEnable($IsGrpIndBookingEnable)
    {
        $this->IsGrpIndBookingEnable = $IsGrpIndBookingEnable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLimitativeInWEB()
    {
        return $this->IsLimitativeInWEB;
    }

    /**
     * @param boolean $IsLimitativeInWEB
     * @return \Gueststream\PMS\IQWare\API\WebResConfig
     */
    public function setIsLimitativeInWEB($IsLimitativeInWEB)
    {
        $this->IsLimitativeInWEB = $IsLimitativeInWEB;
        return $this;
    }
}

<?php

namespace Gueststream\PMS\IQWare\API;

class OwnerTemplates
{

    /**
     * @var int $ID_Template
     */
    protected $ID_Template = null;

    /**
     * @var int $ID_Nationality
     */
    protected $ID_Nationality = null;

    /**
     * @var boolean $IsFreePayTV
     */
    protected $IsFreePayTV = null;

    /**
     * @var int $ID_Language
     */
    protected $ID_Language = null;

    /**
     * @var boolean $IsExportAllowed
     */
    protected $IsExportAllowed = null;

    /**
     * @var int $ID_TaxExemption
     */
    protected $ID_TaxExemption = null;

    /**
     * @var int $ID_SocioPro
     */
    protected $ID_SocioPro = null;

    /**
     * @var boolean $IsSendToBanquet
     */
    protected $IsSendToBanquet = null;

    /**
     * @var int $PhoneRestrictionLevel
     */
    protected $PhoneRestrictionLevel = null;

    /**
     * @var int $ID_Geographic
     */
    protected $ID_Geographic = null;

    /**
     * @var boolean $IsExpressCOAuthorised
     */
    protected $IsExpressCOAuthorised = null;

    /**
     * @var int $ID_RoomTypeSold
     */
    protected $ID_RoomTypeSold = null;

    /**
     * @var int $ID_Bedding
     */
    protected $ID_Bedding = null;

    /**
     * @var int $TVPackageNo
     */
    protected $TVPackageNo = null;

    /**
     * @var boolean $IsAR
     */
    protected $IsAR = null;

    /**
     * @var boolean $IsPayTVActivated
     */
    protected $IsPayTVActivated = null;

    /**
     * @var int $ID_RateCode
     */
    protected $ID_RateCode = null;

    /**
     * @var int $ID_RateReason
     */
    protected $ID_RateReason = null;

    /**
     * @var int $ID_Floor
     */
    protected $ID_Floor = null;

    /**
     * @var int $ConnectingWith
     */
    protected $ConnectingWith = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var float $ManuelRate
     */
    protected $ManuelRate = null;

    /**
     * @var int $ID_CreditLimit
     */
    protected $ID_CreditLimit = null;

    /**
     * @var int $HoldLevel
     */
    protected $HoldLevel = null;

    /**
     * @var \DateTime $ExpectedArrTime
     */
    protected $ExpectedArrTime = null;

    /**
     * @var \DateTime $ExpectedDepTime
     */
    protected $ExpectedDepTime = null;

    /**
     * @var int $AcceptedCurrencyType
     */
    protected $AcceptedCurrencyType = null;

    /**
     * @var int $CutoffDays
     */
    protected $CutoffDays = null;

    /**
     * @var int $ID_CreditCard
     */
    protected $ID_CreditCard = null;

    /**
     * @var string $Card_Number
     */
    protected $Card_Number = null;

    /**
     * @var string $Expire_Date
     */
    protected $Expire_Date = null;

    /**
     * @var string $Voucher
     */
    protected $Voucher = null;

    /**
     * @var string $TaxNo
     */
    protected $TaxNo = null;

    /**
     * @var int $FirstDepDay
     */
    protected $FirstDepDay = null;

    /**
     * @var int $ID_GuestType
     */
    protected $ID_GuestType = null;

    /**
     * @var \DateTime $FirstDepDate
     */
    protected $FirstDepDate = null;

    /**
     * @var string $TaxNo2
     */
    protected $TaxNo2 = null;

    /**
     * @var int $ID_SrcBusiness
     */
    protected $ID_SrcBusiness = null;

    /**
     * @var int $FirstDepType
     */
    protected $FirstDepType = null;

    /**
     * @var float $FirstDepAmount
     */
    protected $FirstDepAmount = null;

    /**
     * @var int $SecondDepDay
     */
    protected $SecondDepDay = null;

    /**
     * @var \DateTime $SecondDepDate
     */
    protected $SecondDepDate = null;

    /**
     * @var int $SecondDepType
     */
    protected $SecondDepType = null;

    /**
     * @var float $SecondDepAmount
     */
    protected $SecondDepAmount = null;

    /**
     * @var int $ArrivalDepDay
     */
    protected $ArrivalDepDay = null;

    /**
     * @var \DateTime $ArrivalDepDate
     */
    protected $ArrivalDepDate = null;

    /**
     * @var int $ArrivalDepType
     */
    protected $ArrivalDepType = null;

    /**
     * @var float $ArrivalDepAmount
     */
    protected $ArrivalDepAmount = null;

    /**
     * @var int $PhoneCallMethod
     */
    protected $PhoneCallMethod = null;

    /**
     * @var int $PhoneChargeType
     */
    protected $PhoneChargeType = null;

    /**
     * @var int $NumberFreeCall
     */
    protected $NumberFreeCall = null;

    /**
     * @var int $Confirmation
     */
    protected $Confirmation = null;

    /**
     * @var int $Sex
     */
    protected $Sex = null;

    /**
     * @var boolean $Is_VIP
     */
    protected $Is_VIP = null;

    /**
     * @var boolean $IsCashOnly
     */
    protected $IsCashOnly = null;

    /**
     * @var int $ID_Vip
     */
    protected $ID_Vip = null;

    /**
     * @var boolean $IsGuaranteed
     */
    protected $IsGuaranteed = null;

    /**
     * @var boolean $IsCallReset
     */
    protected $IsCallReset = null;

    /**
     * @var boolean $IsPreBillingActive
     */
    protected $IsPreBillingActive = null;

    /**
     * @var int $PreBillingDaysNbr
     */
    protected $PreBillingDaysNbr = null;

    /**
     * @var int $ID_MArketSegment
     */
    protected $ID_MArketSegment = null;

    /**
     * @var int $CondoOwner_Id
     */
    protected $CondoOwner_Id = null;

    /**
     * @var int $CondoOwner_Id_0
     */
    protected $CondoOwner_Id_0 = null;

    /**
     * @param int $ID_Template
     * @param int $ID_Nationality
     * @param boolean $IsFreePayTV
     * @param int $ID_Language
     * @param boolean $IsExportAllowed
     * @param int $ID_TaxExemption
     * @param int $ID_SocioPro
     * @param boolean $IsSendToBanquet
     * @param int $PhoneRestrictionLevel
     * @param int $ID_Geographic
     * @param boolean $IsExpressCOAuthorised
     * @param int $ID_RoomTypeSold
     * @param int $ID_Bedding
     * @param int $TVPackageNo
     * @param boolean $IsAR
     * @param boolean $IsPayTVActivated
     * @param int $ID_RateCode
     * @param int $ID_RateReason
     * @param int $ID_Floor
     * @param int $ConnectingWith
     * @param string $Note
     * @param float $ManuelRate
     * @param int $ID_CreditLimit
     * @param int $HoldLevel
     * @param \DateTime $ExpectedArrTime
     * @param \DateTime $ExpectedDepTime
     * @param int $AcceptedCurrencyType
     * @param int $CutoffDays
     * @param int $ID_CreditCard
     * @param string $Card_Number
     * @param string $Expire_Date
     * @param string $Voucher
     * @param string $TaxNo
     * @param int $FirstDepDay
     * @param int $ID_GuestType
     * @param \DateTime $FirstDepDate
     * @param string $TaxNo2
     * @param int $ID_SrcBusiness
     * @param int $FirstDepType
     * @param float $FirstDepAmount
     * @param int $SecondDepDay
     * @param \DateTime $SecondDepDate
     * @param int $SecondDepType
     * @param float $SecondDepAmount
     * @param int $ArrivalDepDay
     * @param \DateTime $ArrivalDepDate
     * @param int $ArrivalDepType
     * @param float $ArrivalDepAmount
     * @param int $PhoneCallMethod
     * @param int $PhoneChargeType
     * @param int $NumberFreeCall
     * @param int $Confirmation
     * @param int $Sex
     * @param boolean $Is_VIP
     * @param boolean $IsCashOnly
     * @param int $ID_Vip
     * @param boolean $IsGuaranteed
     * @param boolean $IsCallReset
     * @param boolean $IsPreBillingActive
     * @param int $PreBillingDaysNbr
     * @param int $ID_MArketSegment
     * @param int $CondoOwner_Id
     * @param int $CondoOwner_Id_0
     */
    public function __construct($ID_Template, $ID_Nationality, $IsFreePayTV, $ID_Language, $IsExportAllowed, $ID_TaxExemption, $ID_SocioPro, $IsSendToBanquet, $PhoneRestrictionLevel, $ID_Geographic, $IsExpressCOAuthorised, $ID_RoomTypeSold, $ID_Bedding, $TVPackageNo, $IsAR, $IsPayTVActivated, $ID_RateCode, $ID_RateReason, $ID_Floor, $ConnectingWith, $Note, $ManuelRate, $ID_CreditLimit, $HoldLevel, \DateTime $ExpectedArrTime, \DateTime $ExpectedDepTime, $AcceptedCurrencyType, $CutoffDays, $ID_CreditCard, $Card_Number, $Expire_Date, $Voucher, $TaxNo, $FirstDepDay, $ID_GuestType, \DateTime $FirstDepDate, $TaxNo2, $ID_SrcBusiness, $FirstDepType, $FirstDepAmount, $SecondDepDay, \DateTime $SecondDepDate, $SecondDepType, $SecondDepAmount, $ArrivalDepDay, \DateTime $ArrivalDepDate, $ArrivalDepType, $ArrivalDepAmount, $PhoneCallMethod, $PhoneChargeType, $NumberFreeCall, $Confirmation, $Sex, $Is_VIP, $IsCashOnly, $ID_Vip, $IsGuaranteed, $IsCallReset, $IsPreBillingActive, $PreBillingDaysNbr, $ID_MArketSegment, $CondoOwner_Id, $CondoOwner_Id_0)
    {
        $this->ID_Template = $ID_Template;
        $this->ID_Nationality = $ID_Nationality;
        $this->IsFreePayTV = $IsFreePayTV;
        $this->ID_Language = $ID_Language;
        $this->IsExportAllowed = $IsExportAllowed;
        $this->ID_TaxExemption = $ID_TaxExemption;
        $this->ID_SocioPro = $ID_SocioPro;
        $this->IsSendToBanquet = $IsSendToBanquet;
        $this->PhoneRestrictionLevel = $PhoneRestrictionLevel;
        $this->ID_Geographic = $ID_Geographic;
        $this->IsExpressCOAuthorised = $IsExpressCOAuthorised;
        $this->ID_RoomTypeSold = $ID_RoomTypeSold;
        $this->ID_Bedding = $ID_Bedding;
        $this->TVPackageNo = $TVPackageNo;
        $this->IsAR = $IsAR;
        $this->IsPayTVActivated = $IsPayTVActivated;
        $this->ID_RateCode = $ID_RateCode;
        $this->ID_RateReason = $ID_RateReason;
        $this->ID_Floor = $ID_Floor;
        $this->ConnectingWith = $ConnectingWith;
        $this->Note = $Note;
        $this->ManuelRate = $ManuelRate;
        $this->ID_CreditLimit = $ID_CreditLimit;
        $this->HoldLevel = $HoldLevel;
        $this->ExpectedArrTime = $ExpectedArrTime->format(\DateTime::ATOM);
        $this->ExpectedDepTime = $ExpectedDepTime->format(\DateTime::ATOM);
        $this->AcceptedCurrencyType = $AcceptedCurrencyType;
        $this->CutoffDays = $CutoffDays;
        $this->ID_CreditCard = $ID_CreditCard;
        $this->Card_Number = $Card_Number;
        $this->Expire_Date = $Expire_Date;
        $this->Voucher = $Voucher;
        $this->TaxNo = $TaxNo;
        $this->FirstDepDay = $FirstDepDay;
        $this->ID_GuestType = $ID_GuestType;
        $this->FirstDepDate = $FirstDepDate->format(\DateTime::ATOM);
        $this->TaxNo2 = $TaxNo2;
        $this->ID_SrcBusiness = $ID_SrcBusiness;
        $this->FirstDepType = $FirstDepType;
        $this->FirstDepAmount = $FirstDepAmount;
        $this->SecondDepDay = $SecondDepDay;
        $this->SecondDepDate = $SecondDepDate->format(\DateTime::ATOM);
        $this->SecondDepType = $SecondDepType;
        $this->SecondDepAmount = $SecondDepAmount;
        $this->ArrivalDepDay = $ArrivalDepDay;
        $this->ArrivalDepDate = $ArrivalDepDate->format(\DateTime::ATOM);
        $this->ArrivalDepType = $ArrivalDepType;
        $this->ArrivalDepAmount = $ArrivalDepAmount;
        $this->PhoneCallMethod = $PhoneCallMethod;
        $this->PhoneChargeType = $PhoneChargeType;
        $this->NumberFreeCall = $NumberFreeCall;
        $this->Confirmation = $Confirmation;
        $this->Sex = $Sex;
        $this->Is_VIP = $Is_VIP;
        $this->IsCashOnly = $IsCashOnly;
        $this->ID_Vip = $ID_Vip;
        $this->IsGuaranteed = $IsGuaranteed;
        $this->IsCallReset = $IsCallReset;
        $this->IsPreBillingActive = $IsPreBillingActive;
        $this->PreBillingDaysNbr = $PreBillingDaysNbr;
        $this->ID_MArketSegment = $ID_MArketSegment;
        $this->CondoOwner_Id = $CondoOwner_Id;
        $this->CondoOwner_Id_0 = $CondoOwner_Id_0;
    }

    /**
     * @return int
     */
    public function getID_Template()
    {
        return $this->ID_Template;
    }

    /**
     * @param int $ID_Template
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_Template($ID_Template)
    {
        $this->ID_Template = $ID_Template;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Nationality()
    {
        return $this->ID_Nationality;
    }

    /**
     * @param int $ID_Nationality
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_Nationality($ID_Nationality)
    {
        $this->ID_Nationality = $ID_Nationality;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFreePayTV()
    {
        return $this->IsFreePayTV;
    }

    /**
     * @param boolean $IsFreePayTV
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsFreePayTV($IsFreePayTV)
    {
        $this->IsFreePayTV = $IsFreePayTV;
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
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_Language($ID_Language)
    {
        $this->ID_Language = $ID_Language;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExportAllowed()
    {
        return $this->IsExportAllowed;
    }

    /**
     * @param boolean $IsExportAllowed
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsExportAllowed($IsExportAllowed)
    {
        $this->IsExportAllowed = $IsExportAllowed;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_TaxExemption()
    {
        return $this->ID_TaxExemption;
    }

    /**
     * @param int $ID_TaxExemption
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_TaxExemption($ID_TaxExemption)
    {
        $this->ID_TaxExemption = $ID_TaxExemption;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SocioPro()
    {
        return $this->ID_SocioPro;
    }

    /**
     * @param int $ID_SocioPro
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_SocioPro($ID_SocioPro)
    {
        $this->ID_SocioPro = $ID_SocioPro;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSendToBanquet()
    {
        return $this->IsSendToBanquet;
    }

    /**
     * @param boolean $IsSendToBanquet
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsSendToBanquet($IsSendToBanquet)
    {
        $this->IsSendToBanquet = $IsSendToBanquet;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneRestrictionLevel()
    {
        return $this->PhoneRestrictionLevel;
    }

    /**
     * @param int $PhoneRestrictionLevel
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setPhoneRestrictionLevel($PhoneRestrictionLevel)
    {
        $this->PhoneRestrictionLevel = $PhoneRestrictionLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Geographic()
    {
        return $this->ID_Geographic;
    }

    /**
     * @param int $ID_Geographic
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_Geographic($ID_Geographic)
    {
        $this->ID_Geographic = $ID_Geographic;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExpressCOAuthorised()
    {
        return $this->IsExpressCOAuthorised;
    }

    /**
     * @param boolean $IsExpressCOAuthorised
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsExpressCOAuthorised($IsExpressCOAuthorised)
    {
        $this->IsExpressCOAuthorised = $IsExpressCOAuthorised;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RoomTypeSold()
    {
        return $this->ID_RoomTypeSold;
    }

    /**
     * @param int $ID_RoomTypeSold
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_RoomTypeSold($ID_RoomTypeSold)
    {
        $this->ID_RoomTypeSold = $ID_RoomTypeSold;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Bedding()
    {
        return $this->ID_Bedding;
    }

    /**
     * @param int $ID_Bedding
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_Bedding($ID_Bedding)
    {
        $this->ID_Bedding = $ID_Bedding;
        return $this;
    }

    /**
     * @return int
     */
    public function getTVPackageNo()
    {
        return $this->TVPackageNo;
    }

    /**
     * @param int $TVPackageNo
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setTVPackageNo($TVPackageNo)
    {
        $this->TVPackageNo = $TVPackageNo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAR()
    {
        return $this->IsAR;
    }

    /**
     * @param boolean $IsAR
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsAR($IsAR)
    {
        $this->IsAR = $IsAR;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPayTVActivated()
    {
        return $this->IsPayTVActivated;
    }

    /**
     * @param boolean $IsPayTVActivated
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsPayTVActivated($IsPayTVActivated)
    {
        $this->IsPayTVActivated = $IsPayTVActivated;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateCode()
    {
        return $this->ID_RateCode;
    }

    /**
     * @param int $ID_RateCode
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_RateCode($ID_RateCode)
    {
        $this->ID_RateCode = $ID_RateCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_RateReason()
    {
        return $this->ID_RateReason;
    }

    /**
     * @param int $ID_RateReason
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_RateReason($ID_RateReason)
    {
        $this->ID_RateReason = $ID_RateReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Floor()
    {
        return $this->ID_Floor;
    }

    /**
     * @param int $ID_Floor
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_Floor($ID_Floor)
    {
        $this->ID_Floor = $ID_Floor;
        return $this;
    }

    /**
     * @return int
     */
    public function getConnectingWith()
    {
        return $this->ConnectingWith;
    }

    /**
     * @param int $ConnectingWith
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setConnectingWith($ConnectingWith)
    {
        $this->ConnectingWith = $ConnectingWith;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * @param string $Note
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setNote($Note)
    {
        $this->Note = $Note;
        return $this;
    }

    /**
     * @return float
     */
    public function getManuelRate()
    {
        return $this->ManuelRate;
    }

    /**
     * @param float $ManuelRate
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setManuelRate($ManuelRate)
    {
        $this->ManuelRate = $ManuelRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CreditLimit()
    {
        return $this->ID_CreditLimit;
    }

    /**
     * @param int $ID_CreditLimit
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_CreditLimit($ID_CreditLimit)
    {
        $this->ID_CreditLimit = $ID_CreditLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getHoldLevel()
    {
        return $this->HoldLevel;
    }

    /**
     * @param int $HoldLevel
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setHoldLevel($HoldLevel)
    {
        $this->HoldLevel = $HoldLevel;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedArrTime()
    {
        if ($this->ExpectedArrTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ExpectedArrTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ExpectedArrTime
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setExpectedArrTime(\DateTime $ExpectedArrTime)
    {
        $this->ExpectedArrTime = $ExpectedArrTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDepTime()
    {
        if ($this->ExpectedDepTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ExpectedDepTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ExpectedDepTime
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setExpectedDepTime(\DateTime $ExpectedDepTime)
    {
        $this->ExpectedDepTime = $ExpectedDepTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getAcceptedCurrencyType()
    {
        return $this->AcceptedCurrencyType;
    }

    /**
     * @param int $AcceptedCurrencyType
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setAcceptedCurrencyType($AcceptedCurrencyType)
    {
        $this->AcceptedCurrencyType = $AcceptedCurrencyType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCutoffDays()
    {
        return $this->CutoffDays;
    }

    /**
     * @param int $CutoffDays
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setCutoffDays($CutoffDays)
    {
        $this->CutoffDays = $CutoffDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_CreditCard()
    {
        return $this->ID_CreditCard;
    }

    /**
     * @param int $ID_CreditCard
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_CreditCard($ID_CreditCard)
    {
        $this->ID_CreditCard = $ID_CreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getCard_Number()
    {
        return $this->Card_Number;
    }

    /**
     * @param string $Card_Number
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setCard_Number($Card_Number)
    {
        $this->Card_Number = $Card_Number;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpire_Date()
    {
        return $this->Expire_Date;
    }

    /**
     * @param string $Expire_Date
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setExpire_Date($Expire_Date)
    {
        $this->Expire_Date = $Expire_Date;
        return $this;
    }

    /**
     * @return string
     */
    public function getVoucher()
    {
        return $this->Voucher;
    }

    /**
     * @param string $Voucher
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setVoucher($Voucher)
    {
        $this->Voucher = $Voucher;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxNo()
    {
        return $this->TaxNo;
    }

    /**
     * @param string $TaxNo
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setTaxNo($TaxNo)
    {
        $this->TaxNo = $TaxNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstDepDay()
    {
        return $this->FirstDepDay;
    }

    /**
     * @param int $FirstDepDay
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setFirstDepDay($FirstDepDay)
    {
        $this->FirstDepDay = $FirstDepDay;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_GuestType()
    {
        return $this->ID_GuestType;
    }

    /**
     * @param int $ID_GuestType
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_GuestType($ID_GuestType)
    {
        $this->ID_GuestType = $ID_GuestType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstDepDate()
    {
        if ($this->FirstDepDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->FirstDepDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FirstDepDate
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setFirstDepDate(\DateTime $FirstDepDate)
    {
        $this->FirstDepDate = $FirstDepDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxNo2()
    {
        return $this->TaxNo2;
    }

    /**
     * @param string $TaxNo2
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setTaxNo2($TaxNo2)
    {
        $this->TaxNo2 = $TaxNo2;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_SrcBusiness()
    {
        return $this->ID_SrcBusiness;
    }

    /**
     * @param int $ID_SrcBusiness
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_SrcBusiness($ID_SrcBusiness)
    {
        $this->ID_SrcBusiness = $ID_SrcBusiness;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstDepType()
    {
        return $this->FirstDepType;
    }

    /**
     * @param int $FirstDepType
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setFirstDepType($FirstDepType)
    {
        $this->FirstDepType = $FirstDepType;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstDepAmount()
    {
        return $this->FirstDepAmount;
    }

    /**
     * @param float $FirstDepAmount
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setFirstDepAmount($FirstDepAmount)
    {
        $this->FirstDepAmount = $FirstDepAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecondDepDay()
    {
        return $this->SecondDepDay;
    }

    /**
     * @param int $SecondDepDay
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setSecondDepDay($SecondDepDay)
    {
        $this->SecondDepDay = $SecondDepDay;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSecondDepDate()
    {
        if ($this->SecondDepDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SecondDepDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SecondDepDate
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setSecondDepDate(\DateTime $SecondDepDate)
    {
        $this->SecondDepDate = $SecondDepDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getSecondDepType()
    {
        return $this->SecondDepType;
    }

    /**
     * @param int $SecondDepType
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setSecondDepType($SecondDepType)
    {
        $this->SecondDepType = $SecondDepType;
        return $this;
    }

    /**
     * @return float
     */
    public function getSecondDepAmount()
    {
        return $this->SecondDepAmount;
    }

    /**
     * @param float $SecondDepAmount
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setSecondDepAmount($SecondDepAmount)
    {
        $this->SecondDepAmount = $SecondDepAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getArrivalDepDay()
    {
        return $this->ArrivalDepDay;
    }

    /**
     * @param int $ArrivalDepDay
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setArrivalDepDay($ArrivalDepDay)
    {
        $this->ArrivalDepDay = $ArrivalDepDay;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDepDate()
    {
        if ($this->ArrivalDepDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ArrivalDepDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ArrivalDepDate
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setArrivalDepDate(\DateTime $ArrivalDepDate)
    {
        $this->ArrivalDepDate = $ArrivalDepDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getArrivalDepType()
    {
        return $this->ArrivalDepType;
    }

    /**
     * @param int $ArrivalDepType
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setArrivalDepType($ArrivalDepType)
    {
        $this->ArrivalDepType = $ArrivalDepType;
        return $this;
    }

    /**
     * @return float
     */
    public function getArrivalDepAmount()
    {
        return $this->ArrivalDepAmount;
    }

    /**
     * @param float $ArrivalDepAmount
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setArrivalDepAmount($ArrivalDepAmount)
    {
        $this->ArrivalDepAmount = $ArrivalDepAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneCallMethod()
    {
        return $this->PhoneCallMethod;
    }

    /**
     * @param int $PhoneCallMethod
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setPhoneCallMethod($PhoneCallMethod)
    {
        $this->PhoneCallMethod = $PhoneCallMethod;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneChargeType()
    {
        return $this->PhoneChargeType;
    }

    /**
     * @param int $PhoneChargeType
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setPhoneChargeType($PhoneChargeType)
    {
        $this->PhoneChargeType = $PhoneChargeType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberFreeCall()
    {
        return $this->NumberFreeCall;
    }

    /**
     * @param int $NumberFreeCall
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setNumberFreeCall($NumberFreeCall)
    {
        $this->NumberFreeCall = $NumberFreeCall;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfirmation()
    {
        return $this->Confirmation;
    }

    /**
     * @param int $Confirmation
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setConfirmation($Confirmation)
    {
        $this->Confirmation = $Confirmation;
        return $this;
    }

    /**
     * @return int
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * @param int $Sex
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIs_VIP()
    {
        return $this->Is_VIP;
    }

    /**
     * @param boolean $Is_VIP
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIs_VIP($Is_VIP)
    {
        $this->Is_VIP = $Is_VIP;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCashOnly()
    {
        return $this->IsCashOnly;
    }

    /**
     * @param boolean $IsCashOnly
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsCashOnly($IsCashOnly)
    {
        $this->IsCashOnly = $IsCashOnly;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_Vip()
    {
        return $this->ID_Vip;
    }

    /**
     * @param int $ID_Vip
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_Vip($ID_Vip)
    {
        $this->ID_Vip = $ID_Vip;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGuaranteed()
    {
        return $this->IsGuaranteed;
    }

    /**
     * @param boolean $IsGuaranteed
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsGuaranteed($IsGuaranteed)
    {
        $this->IsGuaranteed = $IsGuaranteed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCallReset()
    {
        return $this->IsCallReset;
    }

    /**
     * @param boolean $IsCallReset
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsCallReset($IsCallReset)
    {
        $this->IsCallReset = $IsCallReset;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPreBillingActive()
    {
        return $this->IsPreBillingActive;
    }

    /**
     * @param boolean $IsPreBillingActive
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setIsPreBillingActive($IsPreBillingActive)
    {
        $this->IsPreBillingActive = $IsPreBillingActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreBillingDaysNbr()
    {
        return $this->PreBillingDaysNbr;
    }

    /**
     * @param int $PreBillingDaysNbr
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setPreBillingDaysNbr($PreBillingDaysNbr)
    {
        $this->PreBillingDaysNbr = $PreBillingDaysNbr;
        return $this;
    }

    /**
     * @return int
     */
    public function getID_MArketSegment()
    {
        return $this->ID_MArketSegment;
    }

    /**
     * @param int $ID_MArketSegment
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setID_MArketSegment($ID_MArketSegment)
    {
        $this->ID_MArketSegment = $ID_MArketSegment;
        return $this;
    }

    /**
     * @return int
     */
    public function getCondoOwner_Id()
    {
        return $this->CondoOwner_Id;
    }

    /**
     * @param int $CondoOwner_Id
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setCondoOwner_Id($CondoOwner_Id)
    {
        $this->CondoOwner_Id = $CondoOwner_Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCondoOwner_Id_0()
    {
        return $this->CondoOwner_Id_0;
    }

    /**
     * @param int $CondoOwner_Id_0
     * @return \Gueststream\PMS\IQWare\API\OwnerTemplates
     */
    public function setCondoOwner_Id_0($CondoOwner_Id_0)
    {
        $this->CondoOwner_Id_0 = $CondoOwner_Id_0;
        return $this;
    }
}
